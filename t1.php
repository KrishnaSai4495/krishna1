<html>
    <head>
        <title> KS Tracking</title>
    </head>
    <body>
        <h1>Welcome to KS Tracking</h1>
        
        <div class="track1">
            <form action="track2.php" method="GET">
                <label>Enter phone number</label>
                <input type="number" name="phone" id="phone" value="<?php echo $_GET['phone']; ?>" >
                <br>
                <br>
                <label> Enter location</label>
                <input type="text" name="location" id="location" value="<?php echo $_GET['location']; ?>" >
                <br>
                <br>
                <input type="submit" value="Submit" >
            </form>
        </div>
    </body>
</html>
