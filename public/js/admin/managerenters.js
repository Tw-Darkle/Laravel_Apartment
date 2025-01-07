

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

