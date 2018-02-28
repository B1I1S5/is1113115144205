<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--Embeded CSS-->
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
    </head>
    
    <body>
        <br>
        <br>
        <br>
        <!--Make the green box center-->
        <div style="text-align:center;">
        
        <!--Make the text center in green box-->
        <div style="background-color:  #ccffe6;  width:35%; text-align:center;">    
    
        <br/>
        
        <!--Styling the text-->    
        <p style=" font-family: Georgia; font-size: 30px;"><strong>Please select a product:</strong></p>
        
        <!--Create a form-->
        <form method="POST" action="Ebus2.php">
            
            <!--Create a lable and a radio button-->
            <label for="salesforce" style=" font-family: Georgia; font-size: 25px;">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SaleForce &nbsp;&nbsp;@ $100
            </label>

            <br/>
            
            <!--Create a lable and a radio button-->
            <label for="cloud9" style=" font-family: Georgia; font-size: 25px;">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud9 &nbsp;&nbsp;@ $200
            </label>

            <br/>
            
            <!--Create a lable and a radio button-->
            <label for="aws" style=" font-family: Georgia; font-size: 25px;">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services &nbsp;&nbsp;@ $300
            </label>

            <br/>
            
            <!--Create a lable and a radio button-->
            <label for="gmail" style=" font-family: Georgia; font-size: 25px;">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail &nbsp;&nbsp;@ $400
            </label>
            
            <br/>
            <br/>
            <br/>
            
            <!--Create a lable and a text box-->
            <label for="subtotal" style=" font-family: Georgia; font-size: 22px;">
                Sub Total :&nbsp;&nbsp;
                <input style=" font-family: Georgia; font-size: 20px;" type="text" id="subtotal" value="0.00" readonly/>
            </label>

            <br/>
            <br/>
            
            <!--Create a lable and a text box-->
            <label for="discount" style=" font-family: Georgia; font-size: 22px;">
                Discount @ 5% :&nbsp;&nbsp;
                <input style=" font-family: Georgia; font-size: 20px;" type="text" id="discount" value="0.00" readonly/>
            </label>

            <br/><br/>
            
            <!--Create a lable and a text box-->
            <label for="vat" style=" font-family: Georgia; font-size: 22px;">
                Vat @ 10% :&nbsp;&nbsp;
                <input style=" font-family: Georgia; font-size: 20px;" type="text" id="vat" value="0.00" readonly/>
            </label>

            <br/>
            <br/>
            
            <!--Create a lable and a text box-->
            <label for="total" style=" font-family: Georgia; font-size: 22px;">
                Total :&nbsp;&nbsp;
                <input style=" font-family: Georgia; font-size: 20px;" type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            
    
        <br/>
        <br/>
        <br/>
           
        <!--When click the button then Ebus2.php show-->   
        <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        <br/>
        
        <!--Calculator the total cost-->
        <button id="calculate" onClick="calcSub()">Calculate Cost</button>
        <!--Clear the choice-->
        <a id="clear" role="button" href="Ebus1.php">Clear Choice</a>
        
        <br/>
        <br/>
        <br/>
        
        </div>
        </div>
        
    </body>
</html>