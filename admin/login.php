<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<?php

	session_start();

	if ($_SERVER['REQUEST_METHOD']=="POST") {
		
	$name=$_POST['name'];
	$password=$_POST['password'];

	$name_server="localhost";
	$name_manager="root";
	$password_pro="";
	$name_my="shopping5";
	$conn= new mysqli($name_server,$name_manager,$password_pro,$name_my);

	$sqli="SELECT * FROM  manager WHERE  name='$name' and password='$password' and pr = 1";

		$sql=$conn->query($sqli);
	    $night=$sql->num_rows;

		if ($night == 1) {
			
			$_SESSION['login']=$name;

			header("location:index.php");
		}else{

			?>

			
<div style="width: 100%;" class="alert alert-danger" role="alert">
  did not name !
</div>

			<?php
		}

	  

	}


	?>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form autocomplete="no" role="form" method="post" action="<?php $_SERVER['PHP_SELF']?>">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="name" name="name" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<input class="btn btn-primary" type="submit" value="login">
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
