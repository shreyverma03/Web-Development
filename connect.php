<?php

$dbhost='localhost';
$dbuser='shrey';
$dbpassword='pass';
$dbdatabase='restaurant';


$dbconn= mysqli_connect($dbhost,$dbuser,$dbpassword);

if($dbconn)
{
    $resulti=mysqli_select_db($dbconn, $dbdatabase);
  print("connection success");
  
}

else
  {
die ("<strong>ERROR ,</strong>connection Failed");    
}
 ?>
 
 <?php
 
 $Name=$_POST['n'];
 $Mobile=$_POST['m'];
 $EMAIL=$_POST['e'];
 $GENDER=$_POST['GEN'];
 $result=mysqli_query($dbconn,"INSERT INTO test1 VALUES ('".$Name."',".$Mobile.",'".$EMAIL."','".$GENDER."')");
  if($result)
  {
	echo'success';
        print("<br><a href=new1.php>SIGN UP</a>");}
  else
  {
	echo("Error description: " . mysqli_error($dbconn));
        print("<br><a href=new1.php>SIGN UP</a>");}
  
        ?>