<?php
session_start();
$message="";
if(count($_POST)>0) {

$conn = mysqli_connect("localhost", "root","root","customer");

$result1 = mysqli_query($conn,"SELECT * FROM `customer` WHERE `c_name`='" . $_POST["name"] . "' and `c_password` = '". $_POST["password"]."'");
$row1  = mysqli_fetch_array($result1,MYSQLI_NUM);


 if(is_array($row1)) {
//$_SESSION["user_id"] = $row[user_id];
$_SESSION["user_name"] = $row1[0];
	header("Location:catagory.html");
}else{
$message = "<font color='red'>Invalid Username or Password!</font>";
}
}
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" 
        href="register.css">
		<link rel="stylesheet" type="text/css" 
     href="first.css">
</head>
<body>
	<div class="form">
	<h1>The Username or Password entered is wrong</h1>
	<h2>If new user please registration page button</h2>
	</div>
	<br>
	<br>
	<br>
	<br>
	
	<div class="container">
	    <input type="button" onclick="myyFunction()" name="Return to Main Page" value="Return to Main Page" >
        <input type="button" onclick="myfunction()" name="Registration Page" value="Registration Page">
   </div>
<script>
            function myyFunction() {
              location.replace("index.html")
            }
			function myfunction(){
				location.replace("register.html")
			}
        </script>

</body>
</html>