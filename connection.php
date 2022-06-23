<?php
$con=mysqli_connect("localhost","root","root","customer");

if(mysqli_connect_error()){
    echo "cannot connect to database";
    exit();
}
?>