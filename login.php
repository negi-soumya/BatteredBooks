<?php
 
 session_start();
 $v1=$_POST['USR'];
 $v2=$_POST['PWD'];
  $connect= mysqli_connect("localhost","root","crack19","BATBOOKS");
if(!$connect)
	echo "Can't connect to database".mysqli_error();
$q="select * from USER where USR='$v1'";
$sql=mysqli_query($connect,$q);
$c=0;
while($row=mysqli_fetch_assoc($sql))
{
     if($row['PWD']==$v2){
     $_SESSION['CUR_USR']=$v1;
     $_SESSION['CUR_PWD']=$v2;    
     $c=1;
     mysqli_close($connect);
	echo "login";
     }
}

if($c==0) //login details not matched
    {
    
     session_unset();
     session_destroy();
     mysqli_close($connect);
     echo "fail";
     
    }


?>


