/* global $ */

/*Use function to validate the details*/
function validateDetails(){
    
    /*Declare the variables*/
    var name, email, pin;
    
    name = document.getElementById("name").value;
    email = document.getElementById("email").value;
    pin = document.getElementById("user_pin").value;
    
    /*Use if statements to make sure that user entered the details*/
    if(name==""){
        alert("Please enter your name.")
    }
    else{
        enablebtnPurchase();
    }
    
    if(email==""){
        alert("Please enter your email.")
    }
    else{
        enablebtnPurchase();
    }
    
    if(pin==""){
        alert("Please enter your PIN.")
        disablebtnPurchase()
    }
    else if(String(pin).length < 4){
        alert("Please make sure your PIN is accurate")
        disablebtnPurchase()
    }
    else{
        enablebtnPurchase();
    }
    
    
    
}

/*Activate button disabled button*/
function enablebtnPurchase(){
    $("#btnPurchase").prop("disabled",false)
}

function disablebtnPurchase(){
    $("#btnPurchase").prop("disabled",true)
}
        
