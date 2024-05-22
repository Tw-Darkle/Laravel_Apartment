function readmeter() {
    let meters = document.getElementById("readmeter");

    if(meters.style.display === "" || meters.style.display === "none"){
        meters.style.display = "block";
    }
}

function closepopup() {

    if (document.getElementById("readmeter").style.display === "block") {
        document.getElementById("readmeter").style.display = "none";
    }
}