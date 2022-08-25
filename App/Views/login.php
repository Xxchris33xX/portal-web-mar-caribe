<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="<?= PATH_ASSETS.'styles/Sistema/login.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/animations.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.min.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/transformations.css'?>" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="fondo">
    </div>
    <div class="login">
        <form id="loginForm" action="<?= FOLDER_PATH.'/login/validation'?>" method="POST" class="form">
            <div class="back">
                <a href="<?= FOLDER_PATH ?>"><i class='bx bx-arrow-back'></i>Volver</a>
            </div>
            <a href="<?= FOLDER_PATH ?>">
                <img src="<?= PATH_ASSETS.'img/Logo/Logo.png'?>">
            </a>
            <h2>Inicio de sesión</h2>
            <div class="form-content">
                <div class="form-group">
                    <input type="text" class="form-input" value="" placeholder=" " name="Nom_usuario" required>
                    <label for="" class="form-label" type="text">Usuario:</label>
                    <span class="form-line"></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" value="" placeholder=" " name="Contrasenia" required>
                    <label for="" class="form-label" type="number">Contraseña:</label>
                    <i class='bx bx-low-vision btnSee' id="togglePassword"></i>
                    <span class="form-line"></span>
                </div>
                <!-- <div class="g-recaptcha" data-sitekey="6LfRrrggAAAAALvNqCLmm8FHnRQQXfHpeHCoJ3Jl
" style="margin:auto"></div> -->
                <div id="errorLogin" class="errorLogin">
                    <i class='bx bxs-error'></i>
                    <h3></h3>
                </div>
                <button class="form-btn" type="submit"> Iniciar Sesión </button>
            </div>
        </form>
    </div>
    <script src="<?= PATH_ASSETS.'slide/jquery-3.6.0.min.js'?>"></script>
    <script src="<?= PATH_ASSETS.'slide/Form.js'?>"></script>
    <script src="<?= PATH_ASSETS.'slide/Show-Pass.js'?>"></script>
    <script src="<?= PATH_ASSETS.'js/app.js'?>"></script>
</body>

</html>