document.addEventListener("DOMContentLoaded", function () {
    var afwater = document.getElementById("AFWaterMeter");
    var bfwater = document.getElementById("BFWaterMeter");
    var TotalWater = document.getElementById("TTWaterMeter");

    afwater.addEventListener("input", TotalWaterMeter);
    bfwater.addEventListener("input", TotalWaterMeter);

    function TotalWaterMeter() {
        var af = afwater.value || 0;
        var bf = bfwater.value || 0;

        var total = af - bf;
        TotalWater.value = total;
    }

    var afelectric = document.getElementById("AFElectriMeter");
    var bfelectric = document.getElementById("BFElectriMeter");
    var Totalelectric = document.getElementById("TTElectriMeter");
    afelectric.addEventListener("input", TotalElectriMeter);
    bfelectric.addEventListener("input", TotalElectriMeter);

    function TotalElectriMeter() {
        var af = afelectric.value || 0;
        var bf = bfelectric.value || 0;

        var total = af - bf;
        Totalelectric.value = total;
    }

});
