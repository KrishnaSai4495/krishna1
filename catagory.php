<html>
    <head>
    <link rel="stylesheet" type="text/css" 
        href="register.css">
        <link rel="stylesheet" type="text/css" 
        href="catagory.css">    
</head>

<body>
<div class="form">
    <h1>  Select the Catagories<h1>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
<div class="catagory">
        <input type="button" onclick="myFunction()" name="consmetic" value="consmetic" >
</div>
<div class="catagory">
        <input type="button" onclick="myFunction1()" name="electronics" value="electronics" >
</div>
<div class="catagory">
        <input type="button" onclick="myFunction()" name="consmetic" value="consmetic" >
</div>
<div class="catagory">
        <input type="button" onclick="myFunction()" name="consmetic" value="consmetic" >
</div>

        <script>
            function myFunction() {
              location.replace("consmetic.php")
            }
        </script>
        <script>
            function myFunction1() {
              location.replace("electonic.php")
            }
        </script>
</body>
</html>