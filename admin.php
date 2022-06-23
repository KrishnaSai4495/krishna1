<?php
require("connection.php");
session_start();
session_regenerate_id(true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KS Mart Admin Panel
</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link">Admin Page</a>
                </div>
            </div>
        </div>
    </nav>
    <h1 class="text-center">Orders</h1>
    <div class="conatiner">
        <div class="row">
            <div class="col-lg-12">
            <table class="table text-center table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Coustomer Name</th>
      <th scope="col">Phone no</th>
      <th scope="col">Orders</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $query="SELECT * FROM `order_manager`";
      $user_result=mysqli_query($con,$query);
      while($user_fetch=mysqli_fetch_assoc($user_result))
      {
          echo" <tr>
          <td>$user_fetch[order_Id]</td>
          <td>$user_fetch[Full_name]</td>
          <td>$user_fetch[Moblie_no]</td>
          <td>
          <table class='table text-center table-dark table-hover'>
          <thead>
            <tr>
              <th scope='col'>Item_name</th>
              <th scope='col'>Price</th>
              <th scope='col'>Quantity</th>

            </tr>
          </thead>
          <tbody>";
          $order_query="SELECT * FROM `user_manager` WHERE `Order_ID`='$user_fetch[order_Id]'";
          $order_result=mysqli_query($con,$order_query);
          while($order_fetch=mysqli_fetch_assoc($order_result)){
              echo"
              <tr>
              <td>$order_fetch[Item_name]</td>
              <td>$order_fetch[Price]</td>
              <td>$order_fetch[Quantity]</td>
              </tr>
              ";
          }
          echo"
                </tbody>
                </table>
          
          </td>
          
        </tr>";
      }
      ?>
   
  </tbody>
</table>
            </div>
        </div>
    </div>
</div>
<input type="button" onclick="myFunction()" value="place track" id="track">
<script>
  function myFunction() {
              location.replace("track.html")
            }
            </script>
</body>
</html>