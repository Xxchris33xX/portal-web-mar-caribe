<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/menu.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/reg-user.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/formulario.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/validacion.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/animations.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.min.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/transformations.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- Menú -->
    <?php require('partials/menu.php') ?>
    <!-- FIN MENÚ -->
    <!-- FORMULARIO -->
    <section class="home-section">
        <div class="home-content">
          <i class='bx bx-menu'> <span class="text">Menú</span></i>
          <p class="welcome">Bienvenido Usuario#1</p>
      </div>
      <section id="Agregar-Usuario">
        <div class="menu-section">
          <span class="current-section">Editar Usuario : <?php echo $datos [0] ["nom_usuario"];?> </span>
        </div>
        <div class="Registrar-usuario">
          <form class="form" method="POST">
            <div class="form-content">
              <p class="formulario__input-error-name"  id="grupo__nombre">
                El nombre tiene que contener más de 2 dígitos y solo puede contener letras.
              </p>
              <p class="formulario__input-error-name"  id="grupo__apellido">
                El apellido tiene que contener más de 2 dígitos y solo puede contener letras.
              </p>
              <p class="formulario__input-error-name" id="grupo__usuario">
                El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.
              </p>
              <p class="formulario__input-error-name" id="grupo__cedula">
                La cédula únicamente puede contener carácteres numéricos.
              </p>
              <div class="form-group-contact">
                  <!-- INPUT NOMBRE -->
                  <div class="form-div">
                    <input type="text" class="form-input" placeholder="" value="<?php echo $datos [0] ["nombre"];?>" name="Nombre">
                    <label for="" class="form-label" type="text">Nombre:</label>
                  </div>
                  <!-- INPUT APELLIDO -->
                  <div class="form-div">
                  <input type="text" class="form-input" placeholder=" " value="<?php echo $datos [0] ["apellido"];?>" name="Apellido">
                  <label for="" class="form-label" type="text">Apellido:</label>
                  </div>
              </div>
              <div class="form-group-contact">
                <!-- INPUT NOMBRE USUARIO -->
                <div class="form-div">
                  <input type="text" class="form-input" placeholder=" " value="<?php echo $datos [0] ["nom_usuario"];?>" name="Nom_usuario">
                  <label for="" class="form-label" type="text">Usuario:</label>
                </div>  
                <!-- INPUT CÉDULA -->
                <div class="form-div">
                <input type=number class="form-input" name="Cedula" value="<?php echo $datos [0] ["cedula"];?>" placeholder=" ">
                <label for="" class="form-label" type="text">Cédula:</label>
                </div>
              </div>
              <div class="form-group-contact">
                <!-- INPUT ROL -->
                <div class="form-div">
                  <label for="" class="form-label categoria" type="text">Rol:
                    <select id="categorias" class="form-select" name="Rol_usuario">
                    <option value="" selected disabled hidden><?php echo $datos[0]["nom_rol"];?></option>
                      <?php for($i=0;$i<sizeof($rol);$i++){ ?>
                        <option value="<?php echo $rol [$i] ["id_rol"];?>"><?php echo $rol [$i] ["nom_rol"];?></option>
                        <?php } ?>
                      </select>
                    </select>
                  </label>
                </div>
              </div>
              <div class="form-group" id="grupo__password" >
                <!-- INPUT CONTRASEÑA -->
                <input type="password" class="form-input" placeholder=" " id="password" name="Contrasenia">
                <label for="" class="form-label" type="text">Contraseña:</label>
                <i class='bx bx-low-vision' id="togglePassword"></i>
                <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
              </div>
              <div class="form-group" id="grupo__password2">
                <!-- INPUT CONTRASEÑA2 -->
                <input type="password" class="form-input" placeholder=" " id="password2" name="Contrasenia2">
                <label for="" class="form-label" type="text">Repetir Contraseña:</label>
                <i class='bx bx-low-vision' id="togglePassword2"></i>
                <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
              </div>
              <div class="form-group" id="grupo__direccion">
                <!-- INPUT DIRECCIÓN -->
                <input type="text" class="form-input" placeholder=" " value="<?php echo $datos [0] ["direccion"];?>" name="Direccion">
                <label for="" class="form-label" type="text">Dirección</label>
                <p class="formulario__input-error">La direccion tiene que tener más de 4 dígitos.</p>
              </div>
              <div class="form-group-contact">
                <!-- INPUT TELÉFONO -->
                <div class="form-div">
                  <input type="number" class="form-input" placeholder=""  name="Telefono">
                  <label for="" class="form-label" type="text">Teléfono</label>
                </div> 
                <!-- INPUT CORREO -->
                <div class="form-div">
                  <input type="email" class="form-input" placeholder=" " name="Correo">
                  <label for="" class="form-label" type="text">Correo</label>
                </div>  
              </div>
              <p class="formulario__input-error" id="grupo__correo">
                El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.
              </p>
              <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
              <input type="hidden" id="grabar" name="grabar" value="true">
              <input type="submit" class="form-btn" value="Editar Usuario">
            </div>  
          </form>
        </div>
      </section>
      </section>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/menu.js"></script>   
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/Show-Pass.js"></script>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/Form.js"></script>
</body>
</html>