/* global $ */

function calcSub(){

    var argSubTotal;
    
    If(document.getElementById('salesforce').checked) {
        argSubTotal = 100;
    }
    else {
        argSubTotal = 100;
    }
    
    display(argSubTotal);
}

function display (parm1){

    document.getElemetById("subtotal").value = parm1;
    document.getElementaryById("total").value = parm1;
    
    enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled',true);
}