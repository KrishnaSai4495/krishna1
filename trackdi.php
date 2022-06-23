<style>
    td 
    {
        padding:10px;
    }
    </style>
<?php
$servername="localhost";
$username="root";
$password="root";
$databasename="customer";
$conn=mysqli_connect($servername,$username,$password,$databasename);
$query="select *from detail";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total !=0)
{
    ?>
    <table>
        <tr>
            <th> phone </th>
            <th> location </th>
        </tr>
    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo"<tr>
        <td>".$result['phone']."</td>
        <td>".$result['location']." </td>
        <td> <a href='t.php?phone=$result[phone]&location=$result[location]'>EDIT</a></td>
        <td> <a href='t1.php?phone=$result[phone]&location=$result[location]'>DELETE</a></td>
     </tr>";
    }
}
else 
{
    echo "NO DATA";
}
mysqli_close($conn);
?>
</table>
<html>
    <body>
        <input type="button" onclick="myFunctionn1()" value="Return" id="Return">
        <script>

        function myFunctionn1() {
          location.replace("next.html")
        }
         </script>
    </body>
</html>