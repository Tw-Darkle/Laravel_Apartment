function datapayment() {

    if (document.getElementById("PaymentHistory").style.display === ""||document.getElementById("PaymentHistory").style.display === "none") {
        document.getElementById("PaymentHistory").style.display = "block";
    }
}
function closepopup() {

    if (document.getElementById("PaymentHistory").style.display === "block") {
        document.getElementById("PaymentHistory").style.display = "none";
    }
}