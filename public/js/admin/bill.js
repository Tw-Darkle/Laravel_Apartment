
function additional() {
    if(document.getElementById("dataBill").style.display ===""||document.getElementById("dataBill").style.display ==="none"){
        document.getElementById("dataBill").style.display = "block";
        document.getElementById("showDataPay").style.display = "none";
    }
}

function DataPayment() {
    if(document.getElementById("dataBill").style.display ===""||document.getElementById("dataBill").style.display ==="none"){
        document.getElementById("dataBill").style.display = "block";
        document.getElementById("showDataPay").style.display = "none";
    }
}

function closepopup() {

    if (document.getElementById("dataBill").style.display === "block") {
        document.getElementById("dataBill").style.display = "none";
    }
}

function closepopup1() {

    if (document.getElementById("Bills").style.display === "block") {
        document.getElementById("Bills").style.display = "none";
    }
}

function DataBills() {
    if(document.getElementById("Bills").style.display ===""||document.getElementById("Bills").style.display ==="none"){
        document.getElementById("Bills").style.display = "block";
        document.getElementById("dataBill").style.display = "none";
    }
}