
	<?php

	include"fliter/cnd/header-nav.php";
	include"fliter/cnd/aside-list.php";


	?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
		<ol class="breadcrumb">
		 <li><a href="#">
			<em class="fa fa-home"></em>
		    </a></li>
		 <li class="active">Widgets</li>
	    </ol>
		</div><!--/.row-->

	<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">number_phone</th>
      <th scope="col">email</th>
      </tr>
  </thead>

  <?php

	$name_server="localhost";
	$name_manager="root";
	$password_pro="";
	$name_my="maln-shopping";
	$conn= new mysqli($name_server,$name_manager,$password_pro,$name_my);
	$sql="SELECT * FROM customer";
	$sqli=$conn->query($sql);

	while ($pro = $sqli->fetch_assoc()) {
		?>

		<tbody>
    <tr>
      <td><?=$pro["id"]?></td>
      <td><?=$pro["name"]?></td>
      <td><?=$pro["name-phone"]?></td>
      <td><?=$pro["email"]?></td>
      <td>

      	



      </td>
      
     </tr>
  </tbody>


		<?php
	}
	?>
  
</table>












</div>	<!--/.main-->
	  

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
	window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart2 = document.getElementById("bar-chart").getContext("2d");
	window.myBar = new Chart(chart2).Bar(barChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart3 = document.getElementById("doughnut-chart").getContext("2d");
	window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart4 = document.getElementById("pie-chart").getContext("2d");
	window.myPie = new Chart(chart4).Pie(pieData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart5 = document.getElementById("radar-chart").getContext("2d");
	window.myRadarChart = new Chart(chart5).Radar(radarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.05)",
	angleLineColor: "rgba(0,0,0,.2)"
	});
	var chart6 = document.getElementById("polar-area-chart").getContext("2d");
	window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	segmentShowStroke: false
	});
};
	</script>	
</body>
</html>
