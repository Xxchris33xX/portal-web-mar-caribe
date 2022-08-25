const btnSubmit = document.querySelector('.form-btn');
btnSubmit.classList.add('disabled');
btnSubmit.setAttribute("disabled", "");

$(document).ready(function () {

    $("#formularioUsuario").on("input", function () {

        if(!((($(".Nombre").val())==="") || 
        (($(".Apellido").val())==="") ||
        (($(".Usuario").val())==="") ||
        (($(".Cedula").val())==="") ||
        (($(".Contrasena").val())==="") ||
        (($(".Contrasena2").val())==="")
        )){
            btnSubmit.classList.remove('disabled');
            btnSubmit.removeAttribute("disabled", "disabled");
        }else{
            btnSubmit.classList.add('disabled');
            btnSubmit.setAttribute("disabled", "");
        }
    });

    let 

});