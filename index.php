<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="algo_css.css">
    <title>Algorithmes de tri</title>
</head>
<body>
<h1>Algorithmes de tri</h1>
    <br>
    Veuillez choisir le type de série :
    <select name="typeSerie">
        <option selected="selected"> les tri</option>
        <option value="1">tri par insertion</option>
        <option value="2">tri par selection</option>
        <option id="bulle">tri a bulle</option>
        <option value="4">tri de shell</option>
        <option value="5">tri fusion</option>
    </select>
    <br>
    <div>
        Faire la moyenne sur <input id="multi_compute" type="number" name="multi_compute" value="1"> itération(s)
    </div>
    <br>
    <input type="submit" value="Valider">
    <button id="insert">tri par insertion</button>
    <button id="select">tri par selection</button>
    <button id="bubulle">tri à bulle</button>
    <button id="shell">tri de shell</button>
    <button id="fusion">tri fusion</button>
<div class="chart-class">
        <canvas id="theChart"> </canvas>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"> </script>
<script>
    $(document).ready(function () { 
        <?php
       include_once "algo_function.php";
        $newData = array();
        $newData = [20,30,10,14,5,16,40,7,15,22];

        $bubble_sort =  bubble_sort($newData);
        $sort_by_insertion = sort_by_insertion($newData);
        $sort_by_selection = sort_by_selection($newData);
        $shell_sort = shell_sort($newData);
        $merge_sort = merge_sort($newData);
        $merge = merge($newData);
        ?>
        var theData = [
            <?php
            foreach ($bubble_sort as $value) {
                echo $value.",";
            }
            ?>
        ];

        $("#bubulle").click(function(){

           var canvas = $("#theChart");


            var graphAlready = $("#theChart");

            var myChart = new Chart(graphAlready, {

             type: 'bar',

             data: myData(theData),
             options: myOptions() 
        
        });
        
      
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
            var label = $("#bulle").text();

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

       
    });

</script>
</body>
</html>