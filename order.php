<?php
session_start();
$x=$_SESSION['CUR_USR'];

$connect= mysqli_connect("localhost","root","crack19","BATBOOKS");
if(!$connect)
	echo "Can't connect to database".mysqli_error();
$q="delete from CART where USR='$x'";
$sql=mysqli_query($connect,$q);

if($sql)
	{ echo "ok";mysqli_close($connect);exit();}
else
	{ echo "no";mysqli_close($connect);exit();}


?>
