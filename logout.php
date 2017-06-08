<html>
<head>
<title>SIGN UP PAGE</title>
<style>
body{
		background-image: url("bg.png");
		background-repeat: no-repeat;
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

</style>
</head>
<body>
<div class="1" style="background:rgba(2,2,2,0.6); height: 90px;margin-top:-10px;margin-left: -10px;margin-right: -10px;">	  
<a  href="http://localhost/database/"><img src="homeparty.jpg"  style="height:70px; width:20% ; margin:10px 40px; float: left;"/></a> </div>


<?php
session_start();
session_destroy();
echo '<html>'
     . '<div id="web">';
    print("LOGOUT  &nbsp; &nbsp; &nbsp; SUCCESSFUL");
     '</div></html>';

?>

