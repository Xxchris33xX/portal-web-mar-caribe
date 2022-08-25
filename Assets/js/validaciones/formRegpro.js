const btnSubmit = document.querySelector('.form-btn');
btnSubmit.classList.add('disabled');
btnSubmit.setAttribute("disabled", "");

$(document).ready(function () {

    $("#formulario").on("input", function () {

        if(!((($(".Nombre").val())==="") || 
        (($(".Cantidad").val())==="") ||
        (($(".Precio").val())==="") ||
        (($(".productDescript").val())==="") 
        //(($(".Imagen").val())==="")
        )){
            btnSubmit.classList.remove('disabled');
            btnSubmit.removeAttribute("disabled", "disabled");
        }else{
            btnSubmit.classList.add('disabled');
            btnSubmit.setAttribute("disabled", "");     
        }
    });

    let formRegpro = document.querySelector('#formulario');
    formRegpro.onsubmit = function(){
        if(document.querySelector('.productDescript').hasAttribute('disabled')){
            document.querySelector('.productDescript').removeAttribute('disabled');
        }
    }

});

window.addEventListener('load',function(){
    fntCategorias();
},false);

function fntCategorias(){
    let ajaxUrl = host + path +'/con_cat/getCategorias';
    let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    request.open("GET",ajaxUrl,true);
    request.send();

    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            document.querySelector('#categorias').innerHTML = request.responseText;
            document.querySelector('#categorias').value = 1;
            $('#categorias').selectpicker('render');
        }
    }
}