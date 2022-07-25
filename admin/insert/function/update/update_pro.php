<?php



$id=$_POST['id'];


if($_SERVER['REQUEST_METHOD'] != "POST") {
	header("location: ../update.php");
	exit();
} 

//print_r($id);


include "../../../mysqli.php";

$price=$_POST['price'];
$descrption=$_POST['textt'];
$name=$_POST['name'];
//print_r($_FILES);

if ($price == " ") {
	
	
header('location:../addNew.php');  
 
	
} else{



	$sqli="UPDATE products SET image='$file_name',price='$price',letter='$descrption',name='$name' WHERE id ='$id'";


$query=$conn->query($sqli);


if($query) {
	
header('location:../../../products.php');
  
	
} else {

	echo $conn -> error ; 
}


}

?>