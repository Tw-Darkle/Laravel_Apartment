let imgInput = document.getElementById("inputFile");
let preview = document.getElementById("viewFile");

imgInput.onchange = (evt) => {
    const [file] = imgInput.files;
    console.log(imgInput.files);
    if (file) {
        preview.src = URL.createObjectURL(file);
    }
};
