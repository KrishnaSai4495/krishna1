<?php
$servername="localhost";
$username="root";
$password="root";
$databasename="customer";
$a = $_GET["phone"];
$b = $_GET["location"];
$conn=mysqli_connect($servername,$username,$password,$databasename);
if(!$conn)
{
echo "invalid";
}
else{
    $query="UPDATE detail set location='{$b}' where phone='{$a}'";
    $result=mysqli_query($conn,$query);
}
mysqli_close($conn);
echo"<script>
            
window.location.href='trackdi.php';
            </script>";

?>
