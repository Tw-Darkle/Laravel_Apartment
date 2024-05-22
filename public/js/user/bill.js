let imgInput = document.getElementById("inputFile");
let preview = document.getElementById("viewFile");

imgInput.onchange = (evt) => {
    const [file] = imgInput.files;
    console.log(imgInput.files);
    if (file) {
        preview.src = URL.createObjectURL(file);
    }
};


let choice = document.getElementById("TypePay");

choice.onchange = (evt) => {
  const [num] = choice.value; 
  if (num === "2") {
   document.getElementById("upFile").style.display ="block";
  }
  else{
    document.getElementById("upFile").style.display ="none";
  }
}