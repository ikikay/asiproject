<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <title>Questionnaire ASI</title>

        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{url('css/font-awesome.min.css') }}">
        <!-- Favicon site -->
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{url('css/ionicons.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{url('css/AdminLTE.min.css') }}">
        <!-- AdminLTE Skins. Le choix du skin par defaut est bleu.
            On peu le changer par d'autres skin, vérifiez bien d'appliquer la classe du skin, au tag Body pour que ça prenne effet
        -->
        <link rel="stylesheet" href="{{url('css/skins/skin-blue.min.css') }}">

        <link rel="stylesheet" href="{{url('css/style_back.css') }}" >
        <link rel="stylesheet" href="{{url('css/barMenu.css') }}" >
        <link rel="stylesheet" href="{{url('css/barMenu2.css') }}" >

        @yield('css')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="{{ route('dashboard') }}" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">ASI</span>
                    <span class="logo-lg">Questionnaire ASI</span>
                </a>


                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top backgroundbis" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Menu déroulant</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu" style="width:100%">
                        <ul class="nav navbar-nav" style="float:right">
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu" >
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">{{Auth::user()->users_nom }} {{Auth::user()->users_prenom }}</span>

                                    
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header" style="background-color:#333333">
                                        <p style="color:white">
                                            {{Auth::user()->users_nom}}&nbsp {{Auth::user()->users_prenom}}
                                            <br />
                                            <small>Inscrit le : {{Auth::user()->created_at->format('d/m/Y')}}</small><br />
                                            <div class="text-center">
                                            <a href="{{ route('logout') }}" class="btn btn-info btn-flat">Se déconnecter</a>
                                        </div>
                                        </p>
                                        
                                    </li>
                                    
                                    <!-- Menu Body -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar skin-blue" style="background-color:black">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <ul class="sidebar-menu" data-widget="tree">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel" >
                        <center>
                            <li class="header" style="color:white;font-size:16px;">{{Auth::user()->users_nom}}&nbsp {{Auth::user()->users_prenom}}</li>
                        </center>
                    </div>

                    <!-- Sidebar Menu -->
                    
                    @if ( Auth::user()->role == "user"  )
                        <li class="header">Menu principal</li>
                                                <li>
                            <a href="{{ route('offre.indexFront') }}"><i class="fa fa-black-tie"></i><span>Offres d'emplois</span></a>
                        </li>
                        <li>
                            <a href="{{ route('contact.indexFront') }}"><i class="fa fa-retweet"></i><span>Contacts</span></a>
                        </li>
                        <li>
                            <a href="{{ route('societe.indexFront') }}"><i class="fa fa-building"></i><span>Societes</span></a>
                        </li>
                        <li>
                            <a href="{{ route('questionnaire.indexFront') }}"><i class="fa fa-building"></i><span>Questionnaires</span></a>
                        </li>
			
                    @endif
			@if (Auth::user()->role == "admin")
                        <li class="header">Partie Admin</li>
                        <li>
                            <a href="{{ route('offre.index') }}"><i class="fa fa-black-tie"></i><span>Offres d'emplois</span></a>
                        </li>
                        <li>
                            <a href="{{ route('contact.index') }}"><i class="fa fa-retweet"></i><span>Contacts</span></a>
                        </li>
                        <li>
                            <a href="{{ route('societe.index') }}"><i class="fa fa-building"></i><span>Societes</span></a>
                        </li>
                        <li>
                            <a href="{{ route('questionnaire.index') }}"><i class="fa fa-table"></i><span>Questionnaires</span></a>
                        </li>
                        <li>
                            <a href="{{ route('search.search') }}"><i class="fa fa-tablet"></i><span>Statistiques</span></a>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-users"></i><span>Utilisateurs</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">                            
                                <li><a href="{{ route('user.create') }}"><i classe="fa fa-user"></i>Ajouter</a></li>
                                <li><a href="{{ route('user.index') }}"><i classe="fa fa-user"></i>Administrer</a></li>
                            </ul>	
                        </li>
                        @endif

                    </ul>
                    <!-- /.sidebar-menu -->

                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    @yield('title')
                </section>

                <!-- Main content -->
                <section class="content">

                    @if(Session::has('error'))
                    <div class="row">
                        <div class="alert alert-danger">
                            <center><strong>Erreur : </strong> {{Session::get('error')}}</center>
                        </div>
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(Session::has('success'))
                    <div class="row">
                        <div class="alert alert-success">
                            <center><strong>Succès : </strong> {{Session::get('success')}}</center>
                        </div>
                    </div>
                    @endif

                    @yield('content')

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Footer -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <!-- TODO NOM DU PROJET -->
                    QUESTIONNAIRE ASI
                </div>
                <strong>Copyright &copy; 2018/2019 <a href="{{ route('dashboard') }}">Jurandev</a>.</strong> tous droits reservés.
            </footer>

            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 3.3.1 -->
        <script src="{{url('js/jquery.min.js') }}"></script>
        <!-- Bootstrap 4.1.2 -->
        <script src="{{url('js/bootstrap.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{url('js/adminlte.min.js') }}"></script>

        @yield('script')

    </body>
</html>
