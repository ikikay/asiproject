@extends('layout_back')

@section('title')
<h1>
    Statistique
</h1>
@stop

@section('content')

<!--           DONUT CHART 
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Donut Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
             /.box-body 
          </div>
           /.box 

        </div>
         /.col (LEFT) 
        <div class="col-md-6">
           LINE CHART 
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Line Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="lineChart" style="height:250px"></canvas>
              </div>
            </div>
             /.box-body 
          </div>
           /.box -->
<html>
 <head>
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
   <h3 align="center">Statistiques du questionnaire </h3><br />
   
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">{{$libelle->question->questions_libelle}}</h3>
    </div>
    <div class="panel-body" align="center">
        <form method="post" action="process.php">
<select name="quest">
      <option value="first" id="9">>Secteur d'activité de votre entreprise</option>
      <option value="second"id="13">>Sous quel type de contrat (CDI, CDD,...){Theme: Votre premier emploi}</option>
      <option value="third"id="14">>Quel est votre statut(Cadre,agent de maitrise)</option>
      <option value="third"id="30">>Seul ou sous responsabilité{Theme: Votre premier emploi}</option>
      <option value="third"id="18">>Quel type ?{Theme: Votre premier emploi}</option>
      <option value="second"id="33">>Sous quel type de contrat (CDI, CDD,...){Theme: Votre emploi actuel}</option>
      <option value="second"id="34">>Quel est votre statut</option>
      <option value="second"id="38">>Quel type ?{Theme: Votre emploi actuel}</option>
      <option value="third"id="50">>Seul ou sous responsabilité{Theme: Votre emploi actuel}</option>
</select>
<input type="submit" value="Calculer stats" />
</form>
        <div class="text-center "> <a href={{route('search.search')}}><button style="font-size: 16px;">Recherche des Produit par Mots-clÃ©s</button></a></div>
        
     <div id="pie_chart" style="width:750px; height:450px;">

     </div>
<!--             <div id="pie_chart2" style="width:750px; height:450px;">

     </div>-->
    </div>
   </div>
   
  </div>
 </body>
</html>
@stop


@section('script')
<script src="../../bower_components/chart.js/Chart.js"></script>
<script>
   //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
       var analytics = <?php echo $reponse; ?>

   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
     title : ''
    };
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
    chart.draw(data, options);
   }
 
   
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : 700,
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'Chrome'
      },
      {
        value    : 500,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'IE'
      },
      {
        value    : 400,
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : 'FireFox'
      },
      {
        value    : 600,
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : 'Safari'
      },
      {
        value    : 300,
        color    : '#3c8dbc',
        highlight: '#3c8dbc',
        label    : 'Opera'
      },
      {
        value    : 100,
        color    : '#d2d6de',
        highlight: '#d2d6de',
        label    : 'Navigator'
      }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)
    </script>
@stop
