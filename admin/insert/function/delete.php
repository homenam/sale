<?php

include '../../mysqli.php';

$id=$_GET['id'];

$sqli="SELECT * FROM products WHERE id ='$id'";

$comter=$conn->query($sqli);

while ($value = $comter->fetch_assoc()) {
	
	
	$gol=$value['image'];

	unlink("../../image/$gol");
}


$sqll="DELETE FROM products WHERE id ='$id' ";

$conn->query($sqll);

header('location:../../products.php');

?>