<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--Embeded CSS-->
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
    </head>
    
    <br/><br/><br/>
    
    <body>
         <!--Make the text center in green box-->    
        <div style="margin-left:450px;margin-right:450px;">
            
        <!--Make the text center in green box-->    
        <div style="background-color:  #ccffe6; width:100%; text-align:center;">
            
        <br/>
        
        <!--Styling the text-->
        <p style=" font-family: Georgia; font-size: 30px;"><strong>Please enter your payment details:</strong></p>
        
        <!--Create a form-->
        <form action="Ebus3.php" method="POST" >
            
            <!--Create a lable and a text box-->
            <label for="name" style=" font-family: Georgia; font-size: 25px;">Name :</label>&nbsp;&nbsp;
            <input style=" font-family: Georgia; font-size: 22px;" type="text" id="name" name="name" placeholder="Name">

            <br/><br/>
            
            <!--Create a lable and a text box-->
            <label for="email" style=" font-family: Georgia; font-size: 25px;">Email :</label>&nbsp;&nbsp;
            <input style=" font-family: Georgia; font-size: 22px;" type="text" id="email" name="email" placeholder="Email">
              
            <br/><br/> 
            
            <!--Create a lable and a text box-->         
            <label for="user_pin" style=" font-family: Georgia; font-size: 25px;">PIN :</label>&nbsp;&nbsp;
            <input style=" font-family: Georgia; font-size: 22px;" type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
            
            <br/><br/>
            
            <!--When click the button then Ebus3.php show-->
            <button type ="submit" id="btnPurchase" disabled>Proceed with Purchase</button> 

        </form>
        
        <!--Validate the details that make sure the user entered their details-->
        <button id="validate" onClick="validateDetails()">Validate</button>
        
        <br/>
        <br/>
        <br/>

    </div>
        <!--Use java script-->
        <script src="ebus2_validator.js"></script>

     <?php
        //Set session variables
        $_SESSION["total"]=$_POST["total"];
    ?>
    
    </div>  
        
    </body>
</html>