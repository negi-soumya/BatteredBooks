<?php
session_start();
$v1=$_GET['CID'];

$connect= mysqli_connect("localhost","root","crack19","BATBOOKS");
if(!$connect)
	echo "Can't connect to database".mysqli_error();
$q="delete from CART where CID=$v1";
$sql=mysqli_query($connect,$q);
mysqli_close($connect);

header('Location:cart.php');
?>
