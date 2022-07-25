<?php

include"admin/mysqli.php";


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/buy.css">
	<link rel="icon" type="text/css" href="">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
	<title>buy now</title>
</head>
<body>
	<header class="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light header-title-nav">
  <div class="container-fluid">
       <a class="navbar-brand" href="#"><span style="padding: 5px;color:white;margin-left:5px;background-image:linear-gradient(to left ,red ,orange);border-left: solid black;border-radius: 5px;">MALN</span></a>
    <button class="navbar-toggler" type="button">
      <span class="navbar-toggler-icon"></span>
    </button> 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="###">vide</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            shopping
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          	<div style="width: 100%;
          	height: auto;">

          	<ul class="list-group list-group-flush">
  <li class="list-group-item li99">total:<span class="eg">0</span></li>
  <li class="list-group-item li99">
  	<button class="btn btn-danger delete"><a href="##">DELETE</a></button>
  	<button id="buy" class="btn btn-success "><a href="buy.html">buying</a></button>
  </li>

</ul>
          		
          	</div>
          </ul>
        </li>
      
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    </div>
  </div>
</nav>
		
	</header>


	<!--end  -->
	<main class="main">
	
<?php

//print_r($_POST);


$name=$_POST["Name"];
$email=$_POST["Email"];
$number=$_POST["number"];
$area=$_POST["area"];
$size=$_POST["size"];
$nameproducts=$_POST["id"];



$sqli="INSERT INTO process(Name,Email,number11,area, nameproducts, size) VALUES ('$name','$email','$number','$area','$nameproducts','$size')";

$sqll=$conn->query($sqli);

if ($sqll) {
  
  ?>

<div class="alert alert-primary" role="alert" style="text-align: center;">
  The operation was successful.You'll be answered in 10 minutes from now.  
</div>

  <?php


}else {
  
  echo $conn -> erorr;
}


?>


	</main>
<!-- start -->

<footer class="footer-end">
<section class="footer-end">
  <!-- Footer -->
  <footer   class="bg-secondary  text-center text-md-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column input-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0 input-from">
          <h5 class="text-uppercase">Contact</h5>
          <label>Questions? Go ahead.</label>
          <form class="form11">
          	<input type="text" name="" placeholder="name">
          	<input type="email" name="" placeholder="email">
          	<input type="text" name="" placeholder="subject">
          	<input type="text" name="" placeholder="message">
          	<input class="btn btn-dark input-send" type="submit" value="send">
          </form>

          
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">About</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a  href="#"  class="text-white">About us</a>
            </li>
            <li>
              <a href="#" class="text-white">We're hiring</a>
            </li>
            <li>
              <a href="#" class="text-white">Support</a>
            </li>
            <li>
              <a href="#" class="text-white">Find store</a>
            </li>
            <li>
              <a href="#" class="text-white">Shipment</a>
            </li>
            <li>
              <a href="#" class="text-white">Payment</a>
            </li>
            <li>
              <a href="#" class="text-white">Gift card</a>
            </li>
            <li>
              <a href="#" class="text-white">Return</a>
            </li>
            <li>
              <a  href="#" class="text-white">Help</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div   class="col-lg-3 col-md-6 mb-4 mb-md-0 ">
          <h5 class="text-uppercase mb-0">Store</h5>

          <ul class="list-unstyled icon-footer">
            <li>
              <a href="#!" class="text-white"><img src="https://img.icons8.com/material/30/000000/marker-a.png"/><span> Company Name</span></a>
            </li>
            <li>
              <a href="#!" class="text-white"><img src="https://img.icons8.com/material/30/000000/phone--v1.png"/><span> 0044123123</span></a>
            </li>
            <li>
              <a href="#!" class="text-white"><img src="https://img.icons8.com/material/30/000000/mail.png"/>
              	<span>ex@mail.com</span></a>
            </li>
         
            <li>
            <div   class="div-li">
              <a href="#!" class="text-white">
              <img src="https://img.icons8.com/material/30/000000/facebook--v1.png"/> </a>
              <a href="#!" class="text-white">
              	<img src="https://img.icons8.com/material/30/000000/instagram-new--v1.png"/> </a>
              <a href="#!" class="text-white">
              	<img src="https://img.icons8.com/material/30/000000/twitter-squared.png"/>
              	 </a>
              	<a href="">
              		<img src="https://img.icons8.com/material/30/000000/tiktok.png"/>
              	</a>
             
          </div>
            
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>

	
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>