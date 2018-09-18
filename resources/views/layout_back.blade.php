<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <title>[[TODO NOM DU PROJET]]</title>

        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{url('css/font-awesome.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{url('css/ionicons.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{url('css/AdminLTE.min.css') }}">
        <!-- AdminLTE Skins. Le choix du skin par defaut est bleu.
            On peu le changer par d'autres skin, vérifiez bien d'appliquer la classe du skin, au tag Body pour que ça prenne effet
        -->
        <link rel="stylesheet" href="{{url('css/skins/skin-blue.min.css') }}">

        <link rel="stylesheet" href="{{url('css/style_back.css') }}" >

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
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="{{ route("dashboard") }}" class="logo">
                   <!-- mini logo for sidebar mini 50x50 pixels -->
                   <span class="logo-mini">[[TODO]]</span>
                    <!-- logo for regular state and mobile devices -->
                    <!-- TODO <span class="logo-lg">[[TODO NOM DU PROJET]]</span> -->
                    <span class="logo-lg">PROJET</span>
                </a>


                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Menu déroulant</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="{{url('img/profil-default.png') }}" class="user-image" alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <!-- TODO <span class="hidden-xs">{Auth::user()->nom } {Auth::user()->prenom }</span> -->
                                    <span class="hidden-xs">COURBEZ Julian</span>
                                    
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="{{url('img/profil-default.png') }}" class="img-circle" alt="User Image">

                                        <p>
                                            <!-- TODO {Auth::user()->nom} &nbsp {Auth::user()->prenom}
                                            <small>Inscrit le : {Auth::user()->created_at->format('d/m/Y')}</small> -->
                                            COURBEZ Julian
                                            <small>Inscrit le : 30/09/2015</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Se déconnecter</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{url('img/profil-default.png') }}" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <!-- TODO <p>{Auth::user()->nom} &nbsp {Auth::user()->prenom}</p> -->
                            <p>COURBEZ Julian</p>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                        <li class="header">Menu principal</li>
                        <!-- Optionally, you can add icons to the links -->
                        <li class="treeview">
                            <a href="{{ route("dashboard") }}"><i class="fa fa-picture-o"></i> <span>Offres d'emplois</span>  </a>
                        </li>

                        <li class="header">Partie Admin</li>

                        <li class="treeview">
                            <a href="{{ route("dashboard") }}"><i class="fa fa-picture-o"></i> <span>Stats</span>  </a>
                        </li>
                        <li class="treeview">
                            <a href="{{ route("dashboard") }}"><i class="fa fa-picture-o"></i> <span>Gestion des classes</span>  </a>
                        </li>
                        <li class="treeview">
                            <a href="{{ route("dashboard") }}"><i class="fa fa-picture-o"></i> <span>Gestion des comptes</span>  </a>
                        </li>

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
                    PROJET
                </div>
                <strong>Copyright &copy; 2018/2019 <a href="{{ route("dashboard") }}">Jurandev</a>.</strong> tous droits reservés.
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