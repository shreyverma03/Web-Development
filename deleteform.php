
    <html>
<head>
<title>DELETE</title>
<style>
body
   {
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
#i,#j{
	height:20px;
	width:200px;
	background-color: yellow;
}
button{
	float:right;
	margin-right: 50px;
	margin-top: -60px;
	background-color:yellow;
	height:30px;
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


<form action="delete.php" method="POST">
    <h2 style="color:black">DELETE&nbsp;&nbsp;&nbsp; ACCOUNT</h2> 
<b>Name</b>:<input type="text" name="n" id="i"><br>
<b>Mobile</b>:<input type="password" name="m" id="j"<br>
<input type="submit">
</form>
</html>




