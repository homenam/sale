
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
      <th scope="col">image</th>
      <th scope="col">Description</th>
      <th scope="col">price</th>
      <th scope="col">update || delete</th>
    </tr>
  </thead>

  <?php

	$name_server="localhost";
	$name_manager="root";
	$password_pro="";
	$name_my="maln-shopping";
	$conn= new mysqli($name_server,$name_manager,$password_pro,$name_my);
	$sql="SELECT * FROM products";
	$sqli=$conn->query($sql);

	while ($pro = $sqli->fetch_assoc()) {
		?>

		<tbody>
    <tr>
      <td><?=$pro["id"]?></td>
      <td><?=$pro["name"]?></td>
      <td><?php $img=$pro['image']?>
      	<img src="image/<?=$img?>" >
      </td>
      <td><?=$pro["letter"]?></td>
      <td><?=$pro["price"]?></td>
      <td>

      	<button  type="button" class="btn btn-danger">
      	<a style="text-decoration: none;color: black;" href="insert/function/delete.php?id=<?=$pro['id']?>">Delete</a>
      	</button>
      		<button  type="button" class="btn btn-warning">
      		<a style="text-decoration: none;color: black;" href="insert/function/update.php?id=<?=$pro['id']?>">update</a>
      	</button>
      	



      </td>
      
     </tr>
  </tbody>


		<?php
	}
	?>
  
</table>
<button type="button" class="btn btn-success">
      	<a style="text-decoration: none;color: black;" href="insert/insert.php">Insert</a>
  </button>




</div>	<!--/.main-->
	  

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
