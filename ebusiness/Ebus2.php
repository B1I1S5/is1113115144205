<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
    </head>
    
    <br/><br/><br/><br/><br/><br/><br/><br/>
    
    <body>
        <div align="center">
        <div align="center" style="background-color:  #ccffe6; width:35%;">
            
        <br/>
        
        <p style=" font-family: Georgia; font-size: 30px;"><strong>Please enter your payment details</strong></p>
        
        
        <form action="Ebus3.php" method="POST" >
            
            <label for="name" style=" font-family: Georgia; font-size: 25px;">Name :</label>&nbsp;&nbsp;
            <input style=" font-family: Georgia; font-size: 22px;" type="text" id="name" name="name" placeholder="Name">

            <br/><br/>

            <label for="email" style=" font-family: Georgia; font-size: 25px;">Email :</label>&nbsp;&nbsp;
            <input style=" font-family: Georgia; font-size: 22px;" type="text" id="email" name="email" placeholder="Email">
              
            <br/><br/> 
                        
            <label for="user_pin" style=" font-family: Georgia; font-size: 25px;">PIN :</label>&nbsp;&nbsp;
            <input style=" font-family: Georgia; font-size: 22px;" type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
            
            <br/><br/>
            
            <button type ="submit" id="btnPurchase" disabled>Proceed with Purchase</button> 

        </form>
        
        <button id="validate" onClick="validateDetails()">Validate</button>
        
        <br/>
        <br/>
        <br/>

    </div>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>

     <?php
        //Set session variables
        $_SESSION["total"]=$_POST["total"];
    ?>
    
    </div>  
    </div>
        
    </body>
</html>