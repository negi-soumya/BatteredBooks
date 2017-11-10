<?php
session_start();
 $v1=$_SESSION['CUR_USR'];
 $connect= mysqli_connect("localhost","root","crack19","BATBOOKS");
if(!$connect)
	echo "Can't connect to database".mysqli_error();

$q="select EID from USER where USR='$v1'";
$sql=mysqli_query($connect,$q);
$c=0;
while($row=mysqli_fetch_assoc($sql))
  {
     $c=1;
     
     $v=$row['EID'];
  }
 
 $from=$v;
 $header='From:'.$from;
 $c='soumya.negi97@gmail.com';
 $to=$c;
 $msg=$_POST['f'];
 $sub=$_POST['sub'];
 
 mail($to,$sub,$msg,$header);
 
 $to=$v;
 $from=$c;
 $header='From:'.$from;
 
 mail($to,"Your sent".$sub,$msg,$header);
 mysqli_close($connect);
 header('Location:home.html');
?>

