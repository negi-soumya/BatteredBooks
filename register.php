<?php
session_start();

$v1=$_POST['USR'];
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
while($row=mysqli_fetch_assoc($sql))
{
     $c=1;
}
if($c==1)
	{ echo "*Username already exists!";exit();}

 
 //VALIDATION waala
 
 if(preg_match("/\\s/",$v2))
        { mysqli_close($connect);echo "*Space not allowed in password"; exit();}
 	 
 if(preg_match("/^1[2-7](BCE|BEC|BEE|BME|BLC|BCL|MCA|BFT|MIS|BMA)[0-9]{4}$/",$v1))
  {	if(!preg_match("/0000$/",$v1))
  		$c=1;
 	else
   		$c=0;
  } 
 else
 	$c=1;
 if($c==0)	
 	{ mysqli_close($connect);echo "*Invalid Registration no.";exit();}
 //fin
$q="insert into USER (USR,PWD,EID,ROOM,BLOCK) values('$v1','$v2','$v3','$v4','$v5')";
$sql=mysqli_query($connect,$q);
if(!$sql)
	echo "Data not added to table user".mysqli_error($connect);
 mysqli_close($connect);
 echo "ok";
 exit();
?>


