/* global $ */

/*Use function to calculate the subtotal*/
function calcSub(){
    
    /*Declare the variables*/
    var argSubTotal;
    
    if(document.getElementById("salesforce").checked){
        argSubTotal = 100
    }
    else if(document.getElementById("cloud9").checked){
        argSubTotal = 200
    }
    else if(document.getElementById("aws").checked){
        argSubTotal = 300
    }
    else{
        argSubTotal = 400
    }
    
    calcDisVatTotal(argSubTotal);
}

/*Use function to calculate the subtotal, discount, vat and total price*/
function calcDisVatTotal(parmSubTotal){
    
   /*Declare the variables*/
   var subTotal, Dis = 0.05, discountAmt, Vat = 0.1, vatAmt, totalPrice;
   
   subTotal = parmSubTotal;
   discountAmt = (subTotal * Dis);
   vatAmt = ((subTotal - discountAmt) * Vat);
   totalPrice = (subTotal - discountAmt + vatAmt);
   
   display(subTotal, discountAmt, vatAmt, totalPrice);
}

/*When user clike the button then subtotal, discount, vat and total price will show*/
function display(parm1,parm2,parm3,parm4){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vat").value = parm3;
    document.getElementById("total").value = parm4;
    
    enablebtnProceed();
}    

function enablebtnProceed(){
    $("#btnProceed").prop("disabled",false)
}

function disablebtnProceed(){
    $("#btnProceed").prop("disabled",true)
}
        
