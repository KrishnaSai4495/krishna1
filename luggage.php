
<?php 
include("header.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KS mart</title>
</head>
<body>
    <h1 class="text-center">Enjoy Shopping</h1>
    <h2 class="text-center">Luggages</h2>
    <br>
    <br>
    <h3 class="text-center">Hardside luggage</h3>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3"><form action="l_manage.php" method="POST">
            <div class="card">
                <img src="images/t1.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">t1</h5>
                    <p class="card-text">Price: Rs.8500</p>
                    <button type="submit"name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="t1">
                    <input type="hidden" name="Price" value="8500">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="l_manage.php" method="POST">
            <div class="card">
                <img src="images/t2.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">t2 </h5>
                    <p class="card-text">Price: Rs.9700</p>
                    <button type="submit"name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="t2">
                    <input type="hidden" name="Price" value="9700">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="l_manage.php" method="POST">
            <div class="card">
                <img src="images/t3.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                <h5 class="card-title">t3</h5>
                    <p class="card-text">Price: Rs.3500</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="t3">
                    <input type="hidden" name="Price" value="3500">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="l_manage.php" method="POST">
            <div class="card">
                <img src="images/t4.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">t4</h5>
                    <p class="card-text">Price: Rs.4500</p>
                    <button type="submit"name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="t4">
                    <input type="hidden" name="Price" value="4500">
                </div>
                </div>
            </form>
            </div>
            <h3 class="text-center">soft luggage</h3>
            <div class="col-lg-3"><form action="l_manage.php" method="POST">
            <div class="card">
                <img src="images/t5.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">t1</h5>
                    <p class="card-text">Price: Rs.9000</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="st1">
                    <input type="hidden" name="Price" value="9000">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="l_manage.php" method="POST">
            <div class="card">
                <img src="images/t6.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">t2</h5>
                    <p class="card-text">Price: Rs.300000</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="st2">
                    <input type="hidden" name="Price" value="300000">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="l_manage.php" method="POST">
            <div class="card">
                <img src="images/t7.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">t3</h5>
                    <p class="card-text">Price: Rs.250000</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="st3">
                    <input type="hidden" name="Price" value="250000">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="l_manage.php" method="POST">
            <div class="card">
                <img src="images/t8.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">t4</h5>
                    <p class="card-text">Price: Rs.3400</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="st4">
                    <input type="hidden" name="Price" value="3400">
                </div>
                </div>
            </form>
            <br>
            <br>
            <br>
            <br>
            <br>
    <input type="button" onclick="myFunction()" name="Return to home" value="Return">
    <script>
            function myFunction() {
              location.replace("catagory.html")
            }
        </script>
</body>
</html>