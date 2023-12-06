<?php 
$con=mysqli_connect("localhost","root","","phpcrud");
$id= $_GET['id'];
$query="DELETE FROM `product` WHERE id=$id";
mysqli_query($con,$query);
header("location:viewproduct.php");
?>