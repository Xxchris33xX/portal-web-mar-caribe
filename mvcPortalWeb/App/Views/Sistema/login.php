
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/login.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/animations.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.min.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/transformations.css" rel="stylesheet" type="text/css">
</head>
    <body>
        <div class="fondo">
        </div>
        <div class="login">
            <form id="loginForm" action="<?php echo FOLDER_PATH.'/sistema/login/validation'?>"  method="POST" class="form">
                <div id="errorLogin">
                    <i class='bx bxs-error'></i> <h3>Usuario o contraseña incorrecta</h3>
                </div>
                <img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Logo/Logo.png">
                <h2>Inicio de sesión</h2>
                <div class="form-content">
                  <div class="form-group">
                    <input type="text" class="form-input" value="admin" placeholder=" " name="Nom_usuario" required>
                    <label for="" class="form-label" type="text">Usuario:</label>
                    <span class="form-line"></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" value="admin" placeholder=" " name="Contrasenia" required>
                    <label for="" class="form-label" type="number">Contraseña:</label>
                    <span class="form-line"></span>
                </div>
                  <button class="form-btn" type="submit"> Iniciar Sesión </button>
                </div>  
            </form>
        </div>
    <script src="<?php echo PATH_ASSETS.'slide/jquery-3.6.0.min.js'?>"></script>
    <script src="<?php echo PATH_ASSETS.'slide/Form.js'?>"></script>
    <script src="<?php echo PATH_ASSETS.'js/app.js'?>"></script>
    </body>
</html>