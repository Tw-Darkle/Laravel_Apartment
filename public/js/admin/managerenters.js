function editRenter() {
    let edits = document.getElementById("ditdata");

    if (edits.style.display === "" || edits.style.display === "none") {
        edits.style.display = "block";
    }
}

function closepopup() {
    console.log(editdata.style.display);
    if (document.getElementById("editdata").style.display === "block") {
        document.getElementById("editdata").style.display = "none";
    }
}

let imgInput1 = document.getElementById("inputFile1");
let imgInput2 = document.getElementById("inputFile2");
let preview1 = document.getElementById("viewFile1");
let preview2 = document.getElementById("viewFile2");

imgInput1.onchange = (evt) => {
    const [file1] = imgInput1.files;
    if (file1) {
        preview1.src = URL.createObjectURL(file1);
    }
};

imgInput2.onchange = (evt) => {
    const [file2] = imgInput2.files;
    if (file2) {
        preview2.src = URL.createObjectURL(file2);
    }
};

function dataRenters() {
    let show = document.getElementById("showDataRenters");

    if (show.style.display === "" || show.style.display === "none") {
        show.style.display = "block";
    }
}

function closepopup1() {
  if (document.getElementById("showDataRenters").style.display === "block") {
      document.getElementById("showDataRenters").style.display = "none";
  }
}
