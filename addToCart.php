<?php
session_start();
$v1=$_GET['BID'];
$v2=$_GET['OWNER'];//USR
$v3=$_SESSION['CUR_USR'];

$connect= mysqli_connect("localhost","root","crack19","BATBOOKS");
if(!$connect)
	echo "Can't connect to database".mysqli_error();
$q="insert into CART(USR,BID) value('$v3','$v1')";
$sql=mysqli_query($connect,$q);
mysqli_close($connect);

header('Location:cart.php');
?>
