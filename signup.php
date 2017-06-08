<html>
<head>
<title>SIGN UP PAGE</title>
<style>
body{
		background-image: url("bg.png");
		background-repeat: no-repeat;
	}
	
.two{
	border:4px solid black;	
    margin:90px 500px;
    background-color: white;
    color:purple;
    padding-left:10px;
    width: 400px;
    height:395px;

	}
.1{
	padding-left:5px;
	position: fixed;
}
#web{
    border:3px solid black;
	margin:110px 500px;
	padding:10px;
background-color:yellow;
	//text-shadow:2px 2px #FF0000;
	color: #0000ff;   
}
button{
	float:right;
	margin-right: 50px;
	margin-top: -60px;
	background-color:yellow;
	height:30px;
}
</style>
</head>
<body>
<div class="1" style="background:rgba(2,2,2,0.6); height: 90px;margin-top:-10px;margin-left: -10px;margin-right: -10px;">	  
<a  href="http://localhost/database/"><img src="homeparty.jpg"  style="height:70px; width:20% ; margin:10px 40px; float: left;"/></a> </div>

<?php

$dbhost='localhost';
$dbuser='shrey';
$dbpassword='pass';
$dbdatabase='restaurant';


$dbconn= mysqli_connect($dbhost,$dbuser,$dbpassword);

if($dbconn)
{
    $resulti=mysqli_select_db($dbconn, $dbdatabase);
  //print("connection success");
  
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
          echo '<div id="web">';
        echo("<br><a href=signin.html>SIGN IN</a>");
        '</div>';
  }
  else
  {
       echo '<html>'
     . '<div id="web">';
	echo("Error description: " . mysqli_error($dbconn));
        print("<br><a href=14BIT0175.html>SIGN UP</a>");
        print("<br><a href=signin.html>SIGN IN</a>");
        '</div></html>';
  }
  
   ?>