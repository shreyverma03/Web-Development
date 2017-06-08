 <html>
<head>
<title>DELETE</title>
<style>
body
   {
	background-image: url("bg.png");
	background-repeat: no-repeat;
    }
	
#web{
    border:3px solid black;
	margin:110px 500px;
	padding:10px;
background-color:yellow;
	//text-shadow:2px 2px #FF0000;
	color: #0000ff;   
}
.1{
	padding-left:5px;
	position: fixed;
}
#i,#j{
	height:20px;
	width:200px;
	background-color: yellow;
}

form{
	border:3px solid black;
	margin:110px 500px;
	padding:10px;
	background-color:yellow;
	//text-shadow:2px 2px #FF0000;
	color: #0000ff;
}
#i,#j{
    width:320px;
    height:25px;
   
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
 
 $result=mysqli_query($dbconn,"DELETE FROM test1 WHERE (Name='".$Name."' and Mobile=".$Mobile.")");
if ($result) 
{
     echo '<html>'. '<div id="web">';
     echo "Record deleted successfully";
     '</div></html>';
} else 
{
    echo '<html>'. '<div id="web">';
    echo "Error deleting record: ";
    echo"<br>THERE  IS NO SUCH RECORDS";
    '</div></html>';
}

mysqli_close($dbconn);
?>


