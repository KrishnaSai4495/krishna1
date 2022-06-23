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
$phone=$_POST['name'];
$query="select *from detail where phone=$phone";
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
<input type="button" onclick="myFunction()" name="Return to home" value="Return">
    <script>
            function myFunction() {
              location.replace("custtrack.html")
            }
        </script>