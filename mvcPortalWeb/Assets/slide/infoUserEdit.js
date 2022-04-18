const btnEdit = document.getElementById('btnEditinfo');
const inputU = document.getElementById('inputU');
const buttonConfirm = document.querySelector('.button-confirm');



btnEdit.addEventListener('click',()=>{
    if(inputU.hasAttribute("disabled")){
        inputU.removeAttribute("disabled");
        btnEdit.classList.remove("bx-edit-alt");
        btnEdit.classList.add("bx-x-circle");
        buttonConfirm.classList.add("show");
    }else{
        inputU.setAttribute("disabled",inputU);
        buttonConfirm.classList.remove("show");
        btnEdit.classList.remove("bx-x-circle");
        btnEdit.classList.add("bx-edit-alt");
    }
})

const btnEdit2 = document.getElementById('btnEditinfo2');
const inputT = document.getElementById('inputT');
const buttonConfirm2 = document.querySelector('.button-confirm2');



btnEdit2.addEventListener('click',()=>{
    if(inputT.hasAttribute("disabled")){
        inputT.removeAttribute("disabled");
        btnEdit2.classList.remove("bx-edit-alt");
        btnEdit2.classList.add("bx-x-circle");
        buttonConfirm2.classList.add("show");
    }else{
        inputT.setAttribute("disabled",inputT);
        buttonConfirm2.classList.remove("show");
        btnEdit2.classList.remove("bx-x-circle");
        btnEdit2.classList.add("bx-edit-alt");
    }
})

