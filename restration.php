<?php
$servername="localhost";
$username="root";
$password="root";
$databasename="customer";
$usernamee = $_POST["name"]; 
$passwordd = $_POST["password"]; 
$phone = $_POST["phone"];
$conn=mysqli_connect($servername,$username,$password,$databasename);
if(!$conn)
{
echo "invalid";
}
else{
$query="insert into customer values('{$usernamee}','{$passwordd}','{$phone}')";
$result=mysqli_query($conn,$query);
}
mysqli_close($conn);
?>

<html>
    <head>
    <link rel="stylesheet" type="text/css" 
        href="register.css">
</head>
<
<body>
<div class="form">
    <h1> Go Back to home page<h1>
<input type="button" onclick="myFunction()" name="Return to home" value="Return">
        </div>

        <script>
            function myFunction() {
              location.replace("index.html")
            }
        </script>
</body>
</html>

