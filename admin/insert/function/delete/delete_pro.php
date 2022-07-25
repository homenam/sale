<?php


$id=$_GET['id'];
include '../../../mysqli.php';

$sqli="DELETE FROM process WHERE id='$id'";

$sql=$conn->query($sqli);

if ($sql) {

	header("location:../../../process.php");
	

}else{

	echo $conn-> erorr ;


}

?>