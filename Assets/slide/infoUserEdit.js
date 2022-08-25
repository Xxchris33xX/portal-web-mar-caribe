const btnEdit = document.getElementById('btnEditinfo');
const inputU = document.getElementById('inputU');
const buttonConfirm = document.getElementById('btnConfirm');



btnEdit.addEventListener('click',()=>{
    if(inputU.hasAttribute("disabled")){
        inputU.removeAttribute("disabled");
        btnEdit.classList.remove("bx-wrench");
        btnEdit.classList.remove("btn-primary");
        btnEdit.classList.add("btn-danger");
        btnEdit.classList.add("bx-x-circle");
        buttonConfirm.classList.remove("d-none");
        btnEdit.setAttribute('data-original-title','Cancelar edición');
    }else{
        inputU.setAttribute("disabled",inputU);
        buttonConfirm.classList.add("d-none");
        btnEdit.classList.remove("bx-x-circle");
        btnEdit.classList.remove("btn-danger");
        btnEdit.classList.add("btn-primary");
        btnEdit.classList.add("bx-wrench");
        btnEdit.setAttribute('data-original-title','Editar Ubicación');
    }
})

const btnEdit2 = document.getElementById('btnEditinfo2');
const inputT = document.getElementById('inputT');
const buttonConfirm2 = document.getElementById('btnConfirm2');



btnEdit2.addEventListener('click',()=>{
    if(inputT.hasAttribute("disabled")){
        inputT.removeAttribute("disabled");
        btnEdit2.classList.remove("bx-wrench");
        btnEdit2.classList.remove("btn-primary");
        btnEdit2.classList.add("btn-danger");
        btnEdit2.classList.add("bx-x-circle");
        buttonConfirm2.classList.remove("d-none");
        btnEdit2.setAttribute('data-original-title','Cancelar edición');
    }else{
        inputT.setAttribute("disabled",inputT);
        buttonConfirm2.classList.add("d-none");
        btnEdit2.classList.remove("bx-x-circle");
        btnEdit2.classList.remove("btn-danger");
        btnEdit2.classList.add("btn-primary");
        btnEdit2.classList.add("bx-wrench");
        btnEdit2.setAttribute('data-original-title','Editar Teléfonos');
    }
})

