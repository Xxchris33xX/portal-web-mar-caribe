const textArea = document.getElementById('textArea');
const textLettersCount = document.getElementById('textCounter');
const editTextAreaBtn = document.getElementById('editTextAreaBtn');

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
        console.log('a');
        textArea.setAttribute("disabled",textArea);
    }
})

