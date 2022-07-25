<?php 

// echo ;

if($_SERVER['REQUEST_METHOD'] != "POST") {
	header("location: ../insert.php");
	exit();
} 

//print_r($_POST);
$price=$_POST['price'];
$name=$_POST['name'];
$Description=$_POST['textt'];
//print_r('<br>');
//print_r($_FILES);


$file_name=$_FILES['image']['name'];
$file_tmp_name=$_FILES['image']['tmp_name'];
$file_size=$_FILES['image']['size'];


 $new_array=explode(".", $file_name);
 $new_nove=end($new_array);
 $goolman=array('jpg','png','fng');


if (!in_array($new_nove, $goolman)) {
	
 	echo "the image jpg no ";

 	exit();

 }



if ($file_size <1000) {
	
 	echo "the are  file_size = 1000";

 	exit();
 }


 $filename=rand(10000,1).time().$file_name;
 move_uploaded_file($file_tmp_name,"../../image/".$filename );


 include '../../mysqli.php';


$sqli="INSERT INTO products( name, image, price,letter) VALUES ('$name','$filename','$price','$Description')";

$query = $conn -> query($sqli);

 if($query) {
    header("location: ../../products.php");
} else {
  echo $conn -> error ;
}

