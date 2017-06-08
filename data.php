
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
        #xyz{
            background-color:#bfff00;;
            border:3px solid black;
	margin-top:400px;
        margin-left:-20px;
        margin-right:-20px;
        }
        #web{
    border:3px solid black;
	margin-top:300px;
        margin-left:500px;
        width:350px;
        height:150px;
	padding:10px;
	background-color:#bfff00;
	text-align:center;
	color: #0000ff;
    
}

button{
	float:right;
	margin-right: 30px;
	margin-top: -90px;
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
.test2{
    background-color:#bfff00;
    margin-top:150px;
}
span{
    font-size:18px;
    margin-left:0px; 
}
.xy{
	margin-left: 105px;
	margin-right: 0px;
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


$dbconn= mysqli_connect($dbhost,$dbuser,$dbpassword);

if($dbconn)
{
    $resulti=mysqli_select_db($dbconn, $dbdatabase);
  //print("connection success<br>");
  
}

else
  {
die ("<strong>ERROR ,</strong>connection Failed");    
}
 
 $Name=$_POST['nam'];
//print $Name;
 $result=mysqli_query($dbconn,"SELECT  * FROM test2 WHERE (CITY='".$Name."')");
  

 if ($result->num_rows > 0) {
            // output data of each row
     
            echo "<center><table  class=\"test2\" "
            . "border=\"1\"><tr><th>RESTAURANT NAME</th><th>ADDRESS</th><th>CONTACT NO.</th><th>TIMINGS</th><th>CITY</th></tr>";
           while($row = $result->fetch_assoc())
             {
               
                echo "<tr><td>". 
                        $row["Restaurant_Name"]."</td><td>".
                        $row["Address"]."</td><td>". 
                        $row["Contact_no"]. "</td><td>". 
                        $row["Timings"]. "</td><td>".
                        $row["City"]."</td></tr>";
            }
            echo "</table></center>";
            echo '<div id="xyz" ;
            <h1 style="text-align:center;margin-top:200px;font-size:35px;word-spacing:4px;">Now You Can Order your Favourite Cuisines From Your Chosen Restaurant!!</h1>
            <br><br>
            <table>
            <tr>
             <td><img src ="z.jpg" width="100px" height="100px" class="xy" /></td>
             <td><img src ="y.jpg" width="100px" height="100px" class="xy"/></td>
            <td><img src ="x.jpg" width="100px" height="100px" class="xy"/></td>
            <td><img src ="w.jpg" width="100px" height="100px" class="xy"/></td>
            <td><img src ="v.png" width="100px" height="100px" class="xy"/></td>
            <td><img src ="u.png" width="100px" height="100px" class="xy"/></td>
            </tr>  
            </table>
         <pre><span>PUNJABI          SOUPS            BURGERS          BIRYANI         DESSERTS          CHINESE  </span>
            </div>
            </div>';
        } else {
            echo "NO RESULTS  FOUND";
        }
        $dbconn->close();
?>
</body>
</html>
