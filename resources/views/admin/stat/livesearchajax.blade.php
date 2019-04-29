    
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css">

<canvas id="myChart"></canvas>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script>
var labels = '{{$reponses}}';

window.chartColors = {
	red: 'rgb(255, 99, 132)',
	orange: 'rgb(255, 159, 64)',
	yellow: 'rgb(255, 205, 86)',
	green: 'rgb(75, 192, 192)',
	blue: 'rgb(54, 162, 235)',
	purple: 'rgb(153, 102, 255)',
	grey: 'rgb(231,233,237)'
};

var dat = labels.replace( /&quot;/g, '"' );
 
        var ctx = document.getElementById('myChart').getContext('2d');
        
              data = {
    datasets: [{
        data: JSON.parse('{{$nombres}}'),
              backgroundColor: [
        window.chartColors.red,
        window.chartColors.orange,
        window.chartColors.yellow,
        window.chartColors.green,
        window.chartColors.blue,
      ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: JSON.parse(dat)
};

        var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: data,
    
});
        



    
    </script>