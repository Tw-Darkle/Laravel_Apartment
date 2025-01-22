const  checkTable= document.querySelectorAll("#status_payment");

checkTable.forEach(statusPay => {


        const statuspay = statusPay.textContent;
        if (statuspay === 'รอการยืนยันการชำระเงิน') {
            statusPay.style.background = "#ffc107";
            statusPay.style.color = "#000";
        } else if (statuspay === 'ชำระเงินเรียบร้อย') {
            statusPay.style.background = "#198754";
            statusPay.style.color = "#fff";
        } else {
            statusPay.style.background = "#dc3545";
            statusPay.style.color = "#fff";
        }
});


