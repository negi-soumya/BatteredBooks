<?php
session_start();
$v1=$_SESSION['CUR_USR'];
$v2=$_POST['PWD'];
$v3=$_POST['EID'];
$v4=$_POST['ROOM'];
$v5=$_POST['BLOCK'];

   $connect= mysqli_connect("localhost","root","crack19","BATBOOKS");
if(!$connect)
	echo "Can't connect to database".mysqli_error();
$q="select * from USER where USR='$v1'";
$sql=mysqli_query($connect,$q);
$c=0;

 if(preg_match("/\\s/",$v2))
        { mysqli_close($connect);echo "*Space not allowed in password"; exit();}
 $q="update USER set PWD='$v2',EID='$v3',ROOM='$v4',BLOCK='$v5' where USR='$v1'";
$sql=mysqli_query($connect,$q);
if(!$sql)
	echo "Data not added to table user".mysqli_error($connect);
 mysqli_close($connect);
 echo "ok";
 header('Location:profile.php');
?>
