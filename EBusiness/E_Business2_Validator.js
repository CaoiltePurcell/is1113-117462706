/* global $ */

function validateDetails(){
    
    var pin;
    
    pin = document.getElementById("pin").value;
    
    if (pin = ""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
        }
    else{
        validateEmail()
        }
        
}

    function validateEmail(){
    
    var email;
    
    email = document.getElementById("user_email").value;
    
    if (email == ""){
        alert("please enter an email.")
    }
    else{
        validatePin();
    }
}

function validatePin(){
    
var pin;
    
    pin = document.getElementById("user_pin").value;
    
    if (pin == ""){
        alert("Please enter your PIN.");
    }
    else if (pin.length < 4){
        alert("Your PIN must be 4 digits.");
    }
    else{
        alert("All your details are valid.")
        enablebtnPurchase()
    }
}


function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled', true);
}