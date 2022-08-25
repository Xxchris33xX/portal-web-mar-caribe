const inputBtns = document.querySelectorAll(".editBtn");
inputBtns.forEach(inputBtn=>{
    inputBtn.addEventListener('click',editInput);
})

function editInput(event){
    const Btn = event.target;

    //CAPTURAR EL INPUT

    const input = Btn.parentElement.querySelector(".inputCat");
    const btnConfirm = Btn.parentElement.querySelector(".button-confirm2");
    const btnEdit = Btn.parentElement.querySelector(".btnEditinfo");

    if(input.hasAttribute("disabled")){
        input.removeAttribute("disabled");
        btnConfirm.classList.add("show");
        btnEdit.classList.remove("bx-edit-alt");
        btnEdit.classList.add("bx-x-circle");
    }else{
        input.setAttribute("disabled",input);
        btnConfirm.classList.remove("show");
        btnEdit.classList.remove("bx-x-circle");
        btnEdit.classList.add("bx-edit-alt");
    }
}