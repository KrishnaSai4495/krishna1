<?php
$servername="localhost";
$username="root";
$password="root";
$databasename="customer";
$phone = $_POST["phone"]; 
$location = $_POST["text"]; 
$conn=mysqli_connect($servername,$username,$password,$databasename);
if(!$conn)
{
echo "invalid";
}
else{
    $query="insert into detail values('{$phone}','{$location}')";
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
    <h1> Go Back to track page<h1>
<input type="button" onclick="myFunction()" name="Return to home" value="Return">
        </div>

        <script>
            function myFunction() {
              location.replace("track.html")
            }
        </script>
</body>
</html>
