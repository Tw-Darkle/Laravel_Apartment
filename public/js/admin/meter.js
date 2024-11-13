document.addEventListener("DOMContentLoaded", function () {

    document.querySelectorAll("[id^='readmeter']").forEach(function (form) {
        var roomId = form.id.replace('readmeter', '');

        var afwater = document.getElementById("AFWaterMeter" + roomId);
        var bfwater = document.getElementById("BFWaterMeter" + roomId);
        var TotalWater = document.getElementById("TTWaterMeter" + roomId);

        if (afwater && bfwater && TotalWater) {
            afwater.addEventListener("input", function() { calculateWaterTotal(roomId); });
            bfwater.addEventListener("input", function() { calculateWaterTotal(roomId); });
        }

        var afelectric = document.getElementById("AFElectriMeter" + roomId);
        var bfelectric = document.getElementById("BFElectriMeter" + roomId);
        var Totalelectric = document.getElementById("TTElectriMeter" + roomId);

        if (afelectric && bfelectric && Totalelectric) {
            afelectric.addEventListener("input", function() { calculateElectricTotal(roomId); });
            bfelectric.addEventListener("input", function() { calculateElectricTotal(roomId); });
        }
    });

    function calculateWaterTotal(roomId) {
        var af = parseInt(document.getElementById("AFWaterMeter" + roomId).value) || 0;
        var bf = parseInt(document.getElementById("BFWaterMeter" + roomId).value) || 0;
        var total = af - bf;
        document.getElementById("TTWaterMeter" + roomId).value = total;
    }

    function calculateElectricTotal(roomId) {
        var af = parseInt(document.getElementById("AFElectriMeter" + roomId).value) || 0;
        var bf = parseInt(document.getElementById("BFElectriMeter" + roomId).value) || 0;
        var total = af - bf;
        document.getElementById("TTElectriMeter" + roomId).value = total;
    }
});
