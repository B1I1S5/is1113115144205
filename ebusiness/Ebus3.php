<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <p style=" font-family: Georgia; font-size: 30px;"><strong><img src="https://d30y9cdsu7xlg0.cloudfront.net/png/26707-200.png" width="50" height="50" align="middle">RECEIPT</strong></p>
        
        <form action="Ebus3.php" method="POST">
            
            <label for="name" style=" font-family: Georgia; font-size: 20px;">Name:</label>
            
            <br/><br/>

            <label for="email" style=" font-family: Georgia; font-size: 20px;">Email:</label>
            
        </form>
        
        <p style=" font-family: Georgia; font-size: 20px;">
        <?php
        //Echo session variables that were set on previous page
        echo "Total is ". $_SESSION["total"] . ".";
        ?>
        </p>
        
        
    </body>
</html>