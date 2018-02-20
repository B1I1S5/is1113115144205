<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
    </head>
    <body>
        <br/><br/><br/><br/><br/>
        <div align="center">
        <div align="center" style="background-color:#ccffe6; width:30%;">
        
        <br/>
        
        <p style=" font-family: Georgia; font-size: 30px;"><strong><img src="https://d30y9cdsu7xlg0.cloudfront.net/png/26707-200.png" width="50" height="50" align="middle">RECEIPT</strong></p>
        
        <p style=" font-family: Georgia; font-size: 20px;">
        <?php
        //Set session variables
        $_SESSION["name"]=$_POST["name"];
        $_SESSION["email"]=$_POST["email"];
        
        //Echo session variables that were set on previous page
        echo "Name: " . "&nbsp;&nbsp;" . $_SESSION["name"] . ".<br>" . "<br>";
        echo "Email: " . "&nbsp;&nbsp;" . $_SESSION["email"] . ".<br>" . "<br>";
        echo "Your total payment is " . $_SESSION["total"] . "&nbsp;" . "euro"  . ".";
        ?>
        </p>
        
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        
        </div>
        </div>
        
    </body>
</html>