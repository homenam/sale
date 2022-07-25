<?php

include_once"admin/mysqli.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/index2.css">
	<link rel="icon" type="text/css" href="">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
	<title>shopping</title>
</head>
<body>
	<header class="header-title">

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
  	<button class="btn btn-success "><a href="buy.html">buying</a></button>
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
	<div class="div--1" style="width: 100%;height:auto;background-color: white;display: none;">
	
	<ul class="list-group list-group-flush">
  <li class="list-group-item li99">total:<span class="eg">0</span></li>
  <li class="list-group-item li99">
  	<button class="btn btn-danger delete"><a href="##">DELETE</a></button>
  	<button class="btn btn-success "><a href="buy.html">buying</a></button>
  </li>

</ul>
	</div>

	<!-- header end -->
	<aside class="aside1"  >

		<div style="width: 100%;height: 100%;" id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators" id="fool">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div  style="width: 100%;height: 100%;" class="carousel-inner">
   
    <div class="image-slider carousel-item active"  style="object-fit: cover;">
      <img src="image/70.jpg" class="im-slider d-block w-100" alt="...">
      <div class="aside1-h1-1">
        


      </div>
    </div>
    <div class="image-slider carousel-item">
      <img src="image/80.jpg" class="im-slider d-block w-100" alt="...">
      <div class="aside1-h1-1">
       
      </div>
    </div>
    <div class="image-slider carousel-item">
      <img src="image/90.png" class="im-slider d-block w-100" alt="...">
      <div class="aside1-h1-1">
        
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
	</aside>
	<main class="main">
		<h2 class="mian-h2"><span class="span">1</span>Products</h2>
	</main>
<footer class="Products">

<div style="width: 90%;height: auto;text-decoration: center;margin-left: auto;margin-right: auto;text-align: center;">


    <?php

    $sqli="SELECT * FROM products  ";

    $sq=$conn->query($sqli);

    while ($good = $sq->fetch_assoc() ) {
      
      ?>
  <div class="slider_d" style="margin-left: 25px;margin-right: 25px;margin-bottom: 11px;">

      <div class="slider-d-img">
      <img src="admin/image/<?=$good['image']?>" alt="ss" title="" class="img----">
      <div class="buy">
        <a class="btn-btn" href="products.php?id=<?=$good['id']?>"><span><img src="https://img.icons8.com/office/30/000000/wallet.png"/>

</span>buy</a>
        
      </div>
    </div>

    <div class="title">
      <div class="letter">
      <a class="ali" href="###"><?=$good["name"]?></a>
      <p><?=$good['letter']?></p>
    </div>
      <div class="price"><span style="border-bottom: solid red;"><?=$good['price']?> $</span> </div>
      
    </div>

    
  </div>



      <?php
    }

    ?>
</div>

</footer>
<main class="main-form">

	<div class="main-text1">
		
	</div>
	<div class="main-text2">
		<h3>Subscribe</h3>
		<label>To get special offers and VIP treatment:</label>
	</div>
	<div class="main-input" style="margin-top: 10px;">

		<input class="input-email" type="email" name="email" placeholder="Enter-email ">
		<a style="margin-top: 10px;" class="btn btn-danger" href="#">Subscribe</a>
		


	</div>
</main>

<footer class="footer-end">
<section class="footer-end">
  <!-- Footer -->
  <footer   class="bg-secondary  text-center text-md-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column input-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0 input-end">
          <h5 class="text-uppercase">Contact</h5>
          <label>Questions? Go ahead.</label>
          <form class="form11">
          	<input type="text" name="" placeholder="name">
          	<input type="email" name="" placeholder="email">
          	<input type="text" name="" placeholder="subject">
          	<input type="text" name="" placeholder="message">
          	<input class="btn btn-dark" type="submit" value="send">
          </form>

          
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div id="vool" class="col-lg-3 col-md-6 mb-4 mb-md-0">
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
        <div id="vool"  class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0">Store</h5>

          <ul class="list-unstyled">
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
            <div id="vool"  class="div-li">
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
<script src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
	
	$(".navbar-toggler").click(function() {
		$(".div--1").toggle();
	
	})
	
	
	$(".span1").click(function(){
		$input_buy=$(".tot").val();
		console.log($input_buy)

	if ($input_buy == 0 ) {

		$(".list-group").prepend("<li class='li9'><img src='image/1.jpg'><br>السعر :450.00ج ||العداد :<span id='count1'> 1 </span>  </li>")
		$(".tot").val(1);
		}

	if ($input_buy == 1) {

 var inp_value=$('#count1').html();

var inp_num=Number(inp_value) + 1;

	$('#count1').html(inp_num);
 	}

	var ul_list=$(".eg").html();
 var ul_num=Number(ul_list) + 450 ;

 	$(".eg").html(ul_num);
	})

	$(".delete").click(function(){

	$(".li9").remove();
 		$(".eg").html(0)
		$(".tot").val(0)
	})








</script>
</body>
</html>