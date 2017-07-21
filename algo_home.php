<?php ini_set('display_errors', '1'); 
include_once'algo_function.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="algo_css.css">
	<title>Mon ALGO Stat</title>
</head>
<body>
  <header>
     <div id="title">
        <h1>Welcome in AlG0 St4t</h1>
    </div>
</header>
<div class="chart-container">
    <canvas id="chart" >     
    </canvas>
</div>

<h1 id="test">mon test</h1>

<div class="chart-container">

    <canvas class="chart" ></canvas>
</div>

<div>
    <?php
    include_once 'chartJs.php'
    ?>
</div>


<div class="chart-container">
    <canvas id="chart" ></canvas>
</div>

<div class="chart-container">
    <canvas id="chart" ></canvas>
</div>

<div class="chart-container">
    <canvas id="chart" ></canvas>
</div>

<div class="chart-container">
    <canvas id="chart" ></canvas>
</div>
<footer>

</footer>	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"> </script>
<!-- <script type="text/javascript" src="algo_js.js"></script> -->
<script>
    $(document).ready(function () { 
        function colorData(the_dataLabel)
        {
            var tabColor = [];
            var color = 'green';
            for(var i = 0; i < the_dataLabel.length; i++)
            {
                tabColor[i] = color;
            }
            return(tabColor);
        }

        function myData(the_dataLabel)
        {
            var label = $("#test").text();

            var data = {
                labels: the_dataLabel,

                datasets: [{

                    label: label,

                    data: the_dataLabel,

                    backgroundColor: colorData(the_dataLabel),

                    borderColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                    ],

                    borderWidth: 1
                }]
            };
            return (data);
        };


        function myOptions()
        {
            var options = {

                scales: {

                    xAxes: [{
                        display: true
                    }],

                    yAxes: [{
                        display: true
                    }]
                }
            };
            return (options);
        };



        <?php
    // include_once "algo_function.php"

        $newData = array();
        $newData = [20,30,10,14,5,16,40,7,15,22];

        $the_new_data =  bubble_sort($newData);
        ?>


        var monTest = [
        <?php
        foreach ($the_new_data as $value) {
            echo $value.",";

        }
        ?>
        ];

        var graphAlready = $(".chart");
        var myChart = new Chart(graphAlready, {

            type: 'bar',

            data: myData(monTest),
            options: myOptions() 
        });

    });

</script>

</body>
</html>