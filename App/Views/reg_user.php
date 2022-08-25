<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Usuario</title>
  <link href="<?= PATH_ASSETS.'styles/Sistema/menu.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'styles/Sistema/reg-user.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'styles/Sistema/formulario.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'styles/Sistema/validacion.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/animations.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.min.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/transformations.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'bootstrap-4.0.0/dist/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css">
</head>

<body class="body">
  <!-- Menú -->
  <?php require('partials/menu.php') ?>
  <!-- FIN MENÚ -->
  <!-- FORMULARIO -->
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'> <span class="text">Menú</span></i>
    </div>
    <?php require_once('events/reg_user.php'); ?>
    <section id="Agregar-Usuario">
      <div class="menu-section">
        <span class="current-section">Registrar Usuarios</span>
      </div>
      <div class="Registrar-usuario">
        <form class="form" method="POST" id="formularioUsuario" action="<?= FOLDER_PATH.'/reg_user/grabar'?>">
          <div class="form-content">
            <span style="text-align: left;">(<span style="color:red;">*</span>) Campo obligatorio</span>
            <p class="formulario__input-error-name" id="grupo__nombre">
              El nombre tiene que contener más de 2 caracteres y solo puede contener letras.
            </p>
            <p class="formulario__input-error-name" id="grupo__apellido">
              El apellido tiene que contener más de 2 caracteres y solo puede contener letras.
            </p>
            <p class="formulario__input-error-name" id="grupo__usuario">
              El usuario tiene que ser de 4 a 16 caracteres y puede contener numeros, letras y guion bajo.
            </p>
            <p class="formulario__input-error-name" id="grupo__cedula">
              La cédula únicamente puede contener caracteres numéricos.
            </p>
            <div class="form-group-contact">
              <!-- INPUT NOMBRE -->
              <div class="form-div">
                <input type="text" class="form-input Nombre" placeholder=" " name="Nombre">
                <label for="" class="form-label" type="text">Nombre:<span style="color:red;">*</span></label>
              </div>
              <!-- INPUT APELLIDO -->
              <div class="form-div">
                <input type="text" class="form-input Apellido" placeholder=" " name="Apellido">
                <label for="" class="form-label" type="text">Apellido:<span style="color:red;">*</span></label>
              </div>
            </div>
            <div class="form-group-contact">
              <!-- INPUT NOMBRE USUARIO -->
              <div class="form-div">
                <input type="text" class="form-input Usuario" placeholder=" " name="Nom_usuario">
                <label for="" class="form-label" type="text">Usuario:<span style="color:red;">*</span></label>
              </div>
              <!-- INPUT CÉDULA -->
              <div class="form-div">
                <input type=number class="form-input Cedula" name="Cedula" placeholder=" ">
                <label for="" class="form-label" type="text">Cédula:<span style="color:red;">*</span></label>
              </div>
            </div>
            <div class="form-group" id="grupo__password">
              <!-- INPUT CONTRASEÑA -->
              <input type="password" class="form-input Contrasena" placeholder=" " id="password" name="Contrasenia">
              <label for="" class="form-label" type="text">Contraseña:<span style="color:red;">*</span></label>
              <i class='btnSee bx bx-low-vision' id="togglePassword"></i>
              <p class="formulario__input-error">Utiliza ocho caracteres como mínimo con una combinación de letras y números.</p>
            </div>
            <div class="form-group" id="grupo__password2">
              <!-- INPUT CONTRASEÑA2 -->
              <input type="password" class="form-input Contrasena2" placeholder=" " id="password2" name="Contrasenia2">
              <label for="" class="form-label" type="text">Repetir Contraseña:<span style="color:red;">*</span></label>
              <i class='btnSee bx bx-low-vision' id="togglePassword2"></i>
              <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
            </div>
            <div class="form-group" id="grupo__direccion">
              <!-- INPUT DIRECCIÓN -->
              <input type="text" class="form-input" placeholder=" " name="Direccion">
              <label for="" class="form-label" type="text">Dirección<span style="color:red;">*</span></label>
              <p class="formulario__input-error">La direccion tiene que tener más de 4 dígitos.</p>
            </div>
            <div class="form-group-contact">
              <!-- INPUT TELÉFONO -->
              <div class="form-div">
                <input type="number" class="form-input" placeholder="" name="Telefono">
                <label for="" class="form-label" type="text">Teléfono</label>
              </div>
              <!-- INPUT CORREO -->
              <div class="form-div">
                <input type="email" class="form-input correo" placeholder=" " name="Correo">
                <label for="" class="form-label" type="text">Correo</label>
              </div>
            </div>
            <input type="hidden" id="mensaje" name="Mensaje" value="Se registró un usuario">
            <input type="hidden" id="grabar" name="grabar" value="true">
            <button type="submit" class="form-btn">
              Registrar Usuario
            </button>
            <p class="formulario__input-error" id="grupo__correo">
              Ingresar una dirección de correo válida. Ejemplo: Marcaribe@center.com
            </p>
            <p class="formulario__input-error" id="grupo__telefono">
            El número telefónico únicamente debe tener carácteres numéricos. Colocar un número telefónico válido. Ejemplo: 04121234567.
            </p>
          </div>
        </form>
      </div>
    </section>
  </section>
  <script src="<?= PATH_ASSETS.'slide/menu.js'?>"></script>
  <script src="<?= PATH_ASSETS.'slide/Show-Pass.js'?>"></script>
  <script src="<?= PATH_ASSETS.'slide/Form.js'?>"></script>
  <script src="<?= PATH_ASSETS.'slide/jquery-3.6.0.min.js'?>"></script>
  <script src="<?= PATH_ASSETS.'popper/popper.min.js'?>"></script>
  <script src="<?= PATH_ASSETS.'bootstrap-4.0.0/dist/js/bootstrap.min.js'?>"></script>
  <script src="<?= PATH_ASSETS.'js/validaciones/formReguser.js'?>"></script>
</body>

</html>