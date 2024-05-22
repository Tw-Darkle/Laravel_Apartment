function addroom() {
    let popupAddroom = document.getElementById("popupform");

    if (popupAddroom.style.display === ""||popupAddroom.style.display === "none") {
        popupAddroom.style.display = "block";
        document.getElementById("showdata").style.display= "none";
        document.getElementById("editdata").style.display= "none";
    } 
}

function closepopup() {

    if (document.getElementById("popupform").style.display === "block") {
        document.getElementById("popupform").style.display = "none";
    }
}

function showdata() {
    let showdatas = document.getElementById("showdata");
    if (showdatas.style.display ===""||showdatas.style.display === "none"){
        showdatas.style.display = "block";
        document.getElementById("popupform").style.display= "none";
        document.getElementById("editdata").style.display= "none";
        
    }
}

function closeshowdata() {

    if (document.getElementById("showdata").style.display === "block") {
        document.getElementById("showdata").style.display = "none";
    }
}

function editdataroom() {
    let editdatas = document.getElementById("editdata");
    if (editdatas.style.display === ""||editdatas.style.display === "none") {
        editdatas.style.display = "block";
        document.getElementById("showdata").style.display= "none";
    } 
}

function closeEditdata() {

    if (document.getElementById("editdata").style.display === "block") {
        document.getElementById("editdata").style.display = "none";
    }
}