<?php
session_start();
$x=$_SESSION['CUR_USR'];

$connect= mysqli_connect("localhost","root","crack19","BATBOOKS");
if(!$connect)
	echo "Can't connect to database".mysqli_error();
$q="delete from USER where USR=$x";
$sql=mysqli_query($connect,$q);
mysqli_close($connect);
session_unset();
session_destroy();
header('Location:first.html');
?>
