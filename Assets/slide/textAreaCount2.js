const textArea = document.getElementById('textDescripcionProduct');
const textLettersCount = document.getElementById('counterText');
const editTextAreaBtn = document.getElementById('btnEditTextArea');

textArea.addEventListener('keyup',characterCount());

function characterCount(){
    setInterval(()=>{
        var c = textArea.value;
        textLettersCount.innerHTML = parseInt(c.length);
    },0000)
}

editTextAreaBtn.addEventListener('click',()=>{
    if(textArea.hasAttribute("disabled")){
        textArea.removeAttribute("disabled");
    }else{
        textArea.setAttribute("disabled",textArea);
    }
})