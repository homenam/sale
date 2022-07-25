<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>insert</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--Custom Font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

<style type="text/css">
	

	img{

		width: 100px;height: 100px;
		box-shadow: 1px 1px 12px;
		margin-left: 20px;
		border-radius: 5px;
	}
</style>


</head>
<body>



<?php
include '../../mysqli.php';


$id=$_GET['id'];

$sql="SELECT * FROM products WHERE id ='$id' ";


$sool=$conn->query($sql);


while ($setland =$sool->fetch_assoc()) {
	?>


 <form method="post" action="update/update_pro.php" enctype="multipart/form-data">
	<label>price:</label>
	<input type="number" name="price" class="form-control" value="<?=$setland['price']?>">
	<br>
	<label>name:</label>
	<input type="text" name="name" class="form-control" value="<?=$setland['name']?>">
	<br>
	<label >description</label> 
	<textarea style="width: 100%;height: 200px" name="textt">
		<?php

echo $setland['letter'];

		?>
	</textarea>
	<br>

	<input style="width:100%"  class="btn btn-primary" type="hidden" value="<?=$setland['id']?>"  name="id">
	<input style="width:100%"  class="btn btn-primary" type="submit" value="login" >
</form>



	<?php
}




?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>