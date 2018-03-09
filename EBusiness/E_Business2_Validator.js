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
        enablebtnPurchase();
        }
        
}

    var name;
    
    name = document.getElementbyID("name").value;
    
    if (name = ""){
        alert("Please enter your name.");
    }
    else{
        enablebtnPurchase();
    }

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled', true);
}