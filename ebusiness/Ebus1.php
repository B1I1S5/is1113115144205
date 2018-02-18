<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
    </head>
    
    <body>
        <p style=" font-family: Georgia; font-size: 30px;"><strong>Please select a product:</strong></p>
        
        <form method="POST" action="Ebus2.php">
            
            <label for="salesforce" style=" font-family: Georgia; font-size: 25px;">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SaleForce &nbsp;&nbsp;@ $100
            </label>

            <br/>
            
            <label for="cloud9" style=" font-family: Georgia; font-size: 25px;">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud9 &nbsp;&nbsp;@ $200
            </label>

            <br/>
            
            <label for="aws" style=" font-family: Georgia; font-size: 25px;">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services &nbsp;&nbsp;@ $300
            </label>

            <br/>
            
            <label for="gmail" style=" font-family: Georgia; font-size: 25px;">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail &nbsp;&nbsp;@ $400
            </label>
            
            <br/>
            <hr/>
            
            <label for="subtotal" style=" font-family: Georgia; font-size: 22px;">
                Sub Total :&nbsp;&nbsp;
                <input style=" font-family: Georgia; font-size: 20px;" type="text" id="subtotal" value="0.00" readonly/>
            </label>

            <br/><br/>
            
            <label for="discount" style=" font-family: Georgia; font-size: 22px;">
                Discount @ 5% :&nbsp;&nbsp;
                <input style=" font-family: Georgia; font-size: 20px;" type="text" id="discount" value="0.00" readonly/>
            </label>

            <br/><br/>
            
            <label for="vat" style=" font-family: Georgia; font-size: 22px;">
                Vat @ 10% :&nbsp;&nbsp;
                <input style=" font-family: Georgia; font-size: 20px;" type="text" id="vat" value="0.00" readonly/>
            </label>

            <br/><br/>
            
            <label for="total" style=" font-family: Georgia; font-size: 22px;">
                Total :&nbsp;&nbsp;
                <input style=" font-family: Georgia; font-size: 20px;" type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            
    
        <br/><hr/><br/>
           
        <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        <br/>
    
        <button id="calculate" onClick="calcSub()">Calculate Cost</button>
        <a id="clear" role="button" href="Ebus1.php">Clear Choice</a>
        
    </body>
</html>