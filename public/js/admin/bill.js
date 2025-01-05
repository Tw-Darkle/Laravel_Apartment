const  checkTable= document.querySelectorAll("#status_payment");

checkTable.forEach(statusCellPay => {


        const statuspay = statusCellPay.textContent;
        if (statuspay === 'รอการยืนยันการชำระเงิน') {
            statusCellPay.style.background = "#ffc107";
            statusCellPay.style.color = "#000";
        } else if (statuspay === 'ชำระเงินเรียบร้อย') {
            statusCellPay.style.background = "#198754";
            statusCellPay.style.color = "#fff";
        } else {
            statusCellPay.style.background = "#dc3545";
            statusCellPay.style.color = "#fff";
        }
});


