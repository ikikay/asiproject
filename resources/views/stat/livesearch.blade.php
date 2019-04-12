@extends('layout_back')

@section('title')
<h1>
    Statistique
</h1>
@stop

@section('content')





<title>le titre ici !</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<style type="text/css">
    .box{
        width:800px;
        margin:0 auto;
    }
</style>

</head>
<body>
    <br />
    <div class="container">
        <h3 align="center">Statistique du questionnaire </h3><br />

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">!!!!</h3>
            </div>
            <div class="panel-body" align="center">


                    <select id="quest" name="quest">
                        @php 
                        $isExist = 1;
                        @endphp   
                        @foreach ($questions as $j)

                        <option value="{{$j->id}}" id="{{$isExist}}">({{$j->theme->themes_libelle}})   {{$j->questions_libelle}} </option>
                         @php 
                        $isExist = $isExist+1;
                        @endphp 
                        @endforeach
                    </select>
                    <input type="submit" id="search" value="Calculer stats" />
           



                <div id="searchResults">

                </div>   
                    
                    
                   

            </div>
        </div>

    </div>
</body>
</html>
@stop





@section('script')


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>


<script>

    console.log('test');
    
    

    
            $('#search').click(function (e) {
               
                 var id_question = $('#quest').val();
                
               
             $.ajax({
                method: "POST",
                url: '{{url("stat/livesearch")}}',
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id_question
                }
            }).done(function (data) {

                $('#searchResults').slideDown().html(data.html);

            });
            
    });
        

    
    
    
    </script>




@endsection