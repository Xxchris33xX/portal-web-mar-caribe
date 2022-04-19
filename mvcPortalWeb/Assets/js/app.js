$(document).ready(function(){
    
    $("#loginForm").bind("submit", function(){
        $.ajax({
            type:$(this).attr("method"),
            url:$(this).attr("action"),
            data:$(this).serialize(),
            beforeSend:function(){
                $("#loginForm button[type=submit]").html("Enviando...");
                $("#loginForm button[type=submit]").attr("disabled","disabled");
            },
            success: function(response) {
                if (response.estado == true) {
                    window.location.href = "/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/sistema/dashboard";
                }else{
                    let errorLogin = document.getElementById('errorLogin');
                    errorLogin.classList.add('active');
                    setInterval(()=>{
                        errorLogin.classList.remove('active');
                    },5000)
                }
                $("#loginForm button[type=submit]").html("Iniciar Sesión");
                $("#loginForm button[type=submit]").removeAttr("disabled");
            },
            error:function(){
                
            }
        });
        return false;
    })

})