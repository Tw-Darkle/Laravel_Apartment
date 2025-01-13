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

let imgInputEdit1 = document.getElementById("inputFileEdit1");
let imgInputEdit2 = document.getElementById("inputFileEdit2");
let previewEdit1 = document.getElementById("viewFileEdit1");
let previewEdit2 = document.getElementById("viewFileEdit2");
imgInputEdit1.onchange = (evt) => {
    const [file3] = imgInputEdit1.files;
    if (file3) {
        previewEdit1.src = URL.createObjectURL(file3);
    }
};
imgInputEdit2.onchange = (evt) => {
    const [file4] = imgInputEdit2.files;
    if (file4) {
        previewEdit2.src = URL.createObjectURL(file4);
    }
};
