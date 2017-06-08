<html>
<head>
<title>SIGN IN PAGE</title>
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
	margin-top:300px;
        margin-left:500px;
        width:350px;
        height:150px;
	padding:10px;
	background-color:yellow;
	text-align:center;
	color: #0000ff;
    
}

#submit{
	float:right;
	margin-right: 30px;
	margin-top: -120px;
	background-color:yellow;
	height:30px;
}
#s{
	width:600px;
	border:8px solid black;
        margin-left:-120px;
        margin-top:-300px;
	//margin:150px 600px 200px 400px;
	background-color:white;
}
#option{
    margin-left:20px;
}
span{
    font-size:18px;
}
</style>
</head>
<body>
<div class="1" style="background:rgba(2,2,2,0.6); height: 90px;margin-top:-10px;margin-left: -10px;margin-right: -10px;">	  
<a  href="http://localhost/database/"><img src="homeparty.jpg"  style="height:70px; width:20% ; margin:10px 40px; float: left;"/></a> </div>
<!---<div id="s">
<form>
    <pre><span> ENTER &nbsp; YOUR &nbsp; CITY  <br>   </span>
     <select value="ENTER YOUR  CITY ">
<option name="nam">NEW DELHI</option>
<option name="nam">MUMBAI</option>
<option name="nam">BANGALORE</option>
<option name="nam">CHENNAI</option>

</select>                                                 <button type="button"  onclick="fun()">SEARCH RESTAURANT</button>
</pre>
</form>
</div>
--->
<?php

$dbhost='localhost';
$dbuser='shrey';
$dbpassword='pass';
$dbdatabase='restaurant';
//session_start();

$dbconn= mysqli_connect($dbhost,$dbuser,$dbpassword);

if($dbconn)
{
    $resulti=mysqli_select_db($dbconn, $dbdatabase);
  
}

else
  {
die ("<strong>ERROR ,</strong>connection Failed");    
}
 ?>
 
 <?php
 
 $Name=$_POST['n'];
 $Mobile=$_POST['m'];
 $result=mysqli_query($dbconn,"SELECT  count(*) FROM test1 WHERE (Name='".$Name."' and Mobile='".$Mobile."')");
 $fetch=  mysqli_fetch_array($result);
 //$_SESSION['Name']=$Name;
 if($fetch[0]>0)
 {
     
     echo '<div id="web">';
     echo 'LOGIN &nbsp; SUCCESSFUL <br><br><br>';
    echo "WELCOME" ."    " .$Name ."!";
     print("<br><br><br><a href=logout.php>LOGOUT</a>");
      '</div>';
    
     echo'
     <div id="s">
     <form action="data.php" method="POST">
    <pre><span> ENTER &nbsp; YOUR &nbsp; CITY  <br>   </span>
     <select name="nam" value="ENTER YOUR  CITY ">
    <div id="option">
     <option name="nam">NEW DELHI</option>
     <option name="nam">MUMBAI</option>
     <option name="nam">BENGALURU</option>
     <option name="nam">CHENNAI</option>
     </div>
     </select>                                                 
     </pre>
     <input type="submit" id="submit" value="SEARCH RESTAURANT" >
     </form>
     </div>';      
 }    
 else {
     
     echo '<div id="web">';
     echo 'LOGIN &nbsp; FAILED <br><br><br>';
       print("<br><a href=14BIT0175.html>SIGN UP</a><br><br>");
        print("<br><a href=signin.html>SIGN IN</a>");
    
      '</div>';
     
        
 }   
  ?>   
</body>
</html>
