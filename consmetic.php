
<?php 
include("header.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paradise Order</title>
</head>
<body>
    <h1 class="text-center">Enjoy Shopping</h1>
    <h2 class="text-center">cosmetics</h2>
    <br>
    <br>
    <h3 class="text-center">Primers</h3>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/lakme1.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Lakme </h5>
                    <p class="card-text">Price: Rs.250</p>
                    <button type="submit"name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="Lakme Pri">
                    <input type="hidden" name="Price" value="250">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/primer2.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Elf</h5>
                    <p class="card-text">Price: Rs.270</p>
                    <button type="submit"name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="elf Pri">
                    <input type="hidden" name="Price" value="270">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/primer3.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">The One</h5>
                    <p class="card-text">Price: Rs.350</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="The_One Pri">
                    <input type="hidden" name="Price" value="350">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/primer4.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">NY Bae</h5>
                    <p class="card-text">Price: Rs.450</p>
                    <button type="submit"name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="NY_Bae Pri">
                    <input type="hidden" name="Price" value="450">
                </div>
                </div>
            </form>
            </div>
            <h3 class="text-center">Foundation</h3>
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/foundation1.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Milani</h5>
                    <p class="card-text">Price: Rs.250</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="Milani Fou">
                    <input type="hidden" name="Price" value="250">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/foundation2.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Revlon</h5>
                    <p class="card-text">Price: Rs.290</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="Revlon Fou">
                    <input type="hidden" name="Price" value="290">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/foundation3.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Giordani</h5>
                    <p class="card-text">Price: Rs.350</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="Giordani Fou">
                    <input type="hidden" name="Price" value="350">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/foundation4.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">L'oreal</h5>
                    <p class="card-text">Price: Rs.340</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="Loreal Fou">
                    <input type="hidden" name="Price" value="340">
                </div>
                </div>
            </form>
            </div>
            <h3 class="text-center">Mascara</h3>
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/mascara1.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Loreal</h5>
                    <p class="card-text">Price: Rs.14</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="Loreal mac">
                    <input type="hidden" name="Price" value="14">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/mascara2.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Insight</h5>
                    <p class="card-text">Price: Rs.40</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="Insight mas">
                    <input type="hidden" name="Price" value="40">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/mascara3.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Maliao</h5>
                    <p class="card-text">Price: Rs.40</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="Maliao mas">
                    <input type="hidden" name="Price" value="40">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/mascara4.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Maybelline</h5>
                    <p class="card-text">Price: Rs.20</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="Maybelline mas">
                    <input type="hidden" name="Price" value="20">
                </div>
                </div>
            </form>
            </div>
            <h3 class="text-center">Lipstick</h3>
           
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/lipstick.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Maybellina</h5>
                    <p class="card-text">Price: Rs.270</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="Maybellina lip">
                    <input type="hidden" name="Price" value="270">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/lipstick1.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Revlon</h5>
                    <p class="card-text">Price: Rs.250</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="Revlon lip">
                    <input type="hidden" name="Price" value="250">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/lipstick2.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Lakme</h5>
                    <p class="card-text">Price: Rs.280</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="Lakme lip">
                    <input type="hidden" name="Price" value="280">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/lipstick3.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Huda Beauty</h5>
                    <p class="card-text">Price: Rs.320</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="Hudabeauty lip">
                    <input type="hidden" name="Price" value="320">
                </div>
                </div>
            </form>
            </div>
            <h3 class="text-center">Blush</h3>
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/blush.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Lakme</h5>
                    <p class="card-text">Price: Rs.320</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="Lakme blu">
                    <input type="hidden" name="Price" value="320">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/blush1.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Nykaa</h5>
                    <p class="card-text">Price: Rs.320</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="Nykaa blu">
                    <input type="hidden" name="Price" value="280">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/blush2.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Revlon</h5>
                    <p class="card-text">Price: Rs.380</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="Revlon blu">
                    <input type="hidden" name="Price" value="380">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-3"><form action="c_manage.php" method="POST">
            <div class="card">
                <img src="images/blush3.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Maybellina</h5>
                    <p class="card-text">Price: Rs.320</p>
                    <button type="submit" name="add_to_cart" class="btn btn-info">Order item</button>
                    <input type="hidden" name="Item_name" value="Maybelline blu">
                    <input type="hidden" name="Price" value="270">
                </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    <input type="button" onclick="myFunction()" name="Return to home" value="Return">
    <script>
            function myFunction() {
              location.replace("catagory.html")
            }
        </script>
</body>
</html>