
<script>
$(document).ready(function () { 
alert("");
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

		bubble_sort($newData);
	?>
	

	var monTest = [10,5,3,4,8,1,12,50,9,7];

	var graphAlready = $(".chart");
	var myChart = new Chart(graphAlready, {

		type: 'bar',

		data: myData(monTest),
		options: myOptions() 
	});

});

</script>