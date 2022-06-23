<?php
session_start();
$con= mysqli_connect("localhost","root","root","customer");
if(mysqli_connect_error()){
    echo"<script>
            alert('Cannot Connect to the Database');
            window.location.href='mycart.php';
            </script>";
            exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {  
        $a=$_POST["order_id"];
       $query1="INSERT INTO order_manager VALUES ('$_POST[order_id]','$_POST[full_name]','$_POST[moblie_no]')";
        if(mysqli_query($con,$query1)){
            $Order_id=$a;    
            $query2="INSERT INTO `user_manager`(`Order_Id`, `Item_name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$query2);
            if($stmt)
            {
              mysqli_stmt_bind_param($stmt,"isii",$Order_id,$Item_Name,$Price,$Quantity);
              foreach($_SESSION['cart'] as $key => $values){
                  $Item_Name=$values['Item_name'];
                  $Price=$values['Price'];
                  $Quantity=$values['Quantity'];
                  mysqli_stmt_execute($stmt);
              }
              unset($_SESSION['cart']);
              echo"<script>
              window.location.href='catagory.html';
              </script>"; 
            }
            else
            {
                echo"<script>
            alert('STMT ERROR');
            window.location.href='mycart.php';
            </script>";
            }
        }else{
            echo"<script>
            alert('SQL ERROR');
            window.location.href='mycart.php';
            </script>";
            
        }
    }
}
?>