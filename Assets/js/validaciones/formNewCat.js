const btnSubmit = document.querySelector('.form-btn');
btnSubmit.classList.add('disabled');
btnSubmit.setAttribute("disabled", "");

$(document).ready(function () {

    $("#formularioCrearCategoria").on("input", function () {

        if(!((($(".Nombre").val())==="") 
        )){
            btnSubmit.classList.remove('disabled');
            btnSubmit.removeAttribute("disabled", "disabled");
        }else{
            btnSubmit.classList.add('disabled');
            btnSubmit.setAttribute("disabled", "");
        }
    });

    $("#formularioEditarUsuario").on("input", function () {

        if(!((($(".NombreCategory").val())==="") 
        )){
            btnSubmit.classList.remove('disabled');
            btnSubmit.removeAttribute("disabled", "disabled");
        }else{
            btnSubmit.classList.add('disabled');
            btnSubmit.setAttribute("disabled", "");
        }
    });


});