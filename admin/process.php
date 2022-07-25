
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
      <th scope="col">NameUser</th>
      <th scope="col">Email</th>
      <th scope="col">number</th>
      <th scope="col">Area</th>
      <th scope="col">size</th>
      <th scope="col">name_products</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>

  <?php

	$name_server="localhost";
	$name_manager="root";
	$password_pro="";
	$name_my="maln-shopping";
	$conn= new mysqli($name_server,$name_manager,$password_pro,$name_my);
	$sql="SELECT * FROM process";
	$sqli=$conn->query($sql);

	while ($pro = $sqli->fetch_assoc()) {
		?>

		<tbody>
    <tr>
      <td><?=$pro["id"]?></td>
      <td><?=$pro["Name"]?>      	
      </td>
      <td><?=$pro["Email"];?></td>
      <td><?=$pro["number11"]?></td>
      <td><?=$pro["area"]?></td>
      <td><?=$pro["size"]?></td>
      <td>

      	<?php 
      	 $img_id=$pro["nameproducts"];
	     $sql2="SELECT * FROM products WHERE id=$img_id";
	     $coll=$conn->query($sql2);

	     while ($yes =$coll->fetch_assoc()) {
	     	?>
      	<img src="image/<?php echo $yes["image"]?>" >
	     
	     	<?php
	     }


      	?>


      	
      </td>
      <td>

      <button  type="button" class="btn btn-danger">
      <a style="text-decoration: none;color: black;" 
      href="insert/function/delete/delete_pro.php?id=<?=$pro['id']?>">Delete</a>
      </button>
      		
      	



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
	
</body>
</html>
