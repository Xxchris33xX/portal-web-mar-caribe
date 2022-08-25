<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Usuario</title>
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
    <?php require('events/log_edit.php') ?>
    <section id="Agregar-Usuario">
      <div class="menu-section">
        <span class="current-section">Editar Usuario: <?= $datos [0] ["nom_usuario"];?> </span>
      </div>
      <div class="Registrar-usuario center">
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="d-flex justify-content-center">
                <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                  aria-controls="collapseOne">
                  Editar información personal
                </button>
              </h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <form class="form" method="POST" action="<?= FOLDER_PATH.'/log_edit/grabar'?>">
                  <div class="form-content">
                    <p class="formulario__input-error-name" id="grupo__nombre">
                      El nombre tiene que contener más de 2 dígitos y solo puede contener letras.
                    </p>
                    <p class="formulario__input-error-name" id="grupo__apellido">
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
                        <input type="text" class="form-input" placeholder="" value="<?= $datos [0] ["nombre"];?>"
                          name="Nombre">
                        <label for="" class="form-label" type="text">Nombre:</label>
                      </div>
                      <!-- INPUT APELLIDO -->
                      <div class="form-div">
                        <input type="text" class="form-input" placeholder=" " value="<?= $datos [0] ["apellido"];?>"
                          name="Apellido">
                        <label for="" class="form-label" type="text">Apellido:</label>
                      </div>
                    </div>
                    <div class="form-group-contact">
                      <!-- INPUT NOMBRE USUARIO -->
                      <div class="form-div">
                        <input type="text" class="form-input" placeholder=" " value="<?= $datos [0] ["nom_usuario"];?>"
                          name="Nom_usuario">
                        <label for="" class="form-label" type="text">Usuario:</label>
                      </div>
                      <!-- INPUT CÉDULA -->
                      <div class="form-div">
                        <input type=number class="form-input" name="Cedula" value="<?= $datos [0] ["cedula"];?>"
                          placeholder=" ">
                        <label for="" class="form-label" type="text">Cédula:</label>
                      </div>
                    </div>
                    <div class="form-group" id="grupo__direccion">
                      <!-- INPUT DIRECCIÓN -->
                      <input type="text" class="form-input" placeholder=" " value="<?= $datos [0] ["direccion"];?>"
                        name="Direccion">
                      <label for="" class="form-label" type="text">Dirección</label>
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
                        <input type="email" class="form-input" placeholder=" " name="Correo">
                        <label for="" class="form-label" type="text">Correo</label>
                      </div>
                    </div>
                    <p class="formulario__input-error" id="grupo__correo">
                      Introduzca una dirección de correo válida.
                    </p>
                    <input type="hidden" name="id" value="<?= $datos[0]["id_usuario"];?>">
                    <input type="hidden" id="mensaje" name="mensaje" value="Se modificó un usuario">
                    <input type="hidden" id="NomUsuario" name="NomUsuario"
                      value="<?= $_SESSION['user']['nom_usuario'] ?>">
                    <input type="hidden" id="grabar" name="grabar" value="true">

                    <button type="button" class="btn form-btn" data-toggle="modal" data-target="#editarUsuario">
                      Editar Usuario
                    </button>

                    <div class="modal fade" id="editarUsuario" tabindex="-1" role="dialog">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Advertencia</b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <h2 class="p-2"><b>¡Atención! ¿Desea confirmar los cambios realizados?</b></h2>
                          <div class="modal-footer d-flex ">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-primary" value="Confirmar">
                          </div>
                        </div>
                      </div>


                    </div>
                </form>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header " id="headingTwo">
              <h5 class="d-flex justify-content-center">
                <button class="btn btn-primary collapsed" data-toggle="collapse" data-target="#collapseTwo"
                  aria-expanded="false" aria-controls="collapseTwo">
                  Editar contraseña
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                <form class="form" method="POST" action="<?= FOLDER_PATH.'/log_edit/editarContrasenia'?>">
                  <div class="form-content">
                    <div class="form-group">
                      <!-- INPUT CONTRASEÑA ANTERIOR -->
                      <input type="password" class="form-input" placeholder=" " name="ContraseniaActual">
                      <label for="" class="form-label" type="text">Contraseña Actual:</label>
                      <i class='bx bx-low-vision btnSee' id="togglePassword"></i>
                    </div>
                    <div class="form-group" id="grupo__password">
                      <!-- INPUT CONTRASEÑA -->
                      <input type="password" class="form-input" placeholder=" " id="password" name="Contrasenia">
                      <label for="" class="form-label" type="text">Nueva Contraseña:</label>
                      <i class='bx bx-low-vision btnSee' id="togglePassword"></i>
                      <p class="formulario__input-error">
                        Utiliza ocho caracteres como mínimo y máximo dieciséis. Con una combinación de letras y números.
                      </p>
                    </div>
                    <div class="form-group" id="grupo__password2">
                      <!-- INPUT CONTRASEÑA2 -->
                      <input type="password" class="form-input" placeholder=" " id="password2" name="Contrasenia2">
                      <label for="" class="form-label" type="text">Repetir Contraseña:</label>
                      <i class='bx bx-low-vision btnSee' id="togglePassword2"></i>
                      <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
                    </div>
                    <input type="hidden" name="iduser" value="<?= $datos[0]["id_usuario"];?>">
                    <input type="hidden" id="grabar" name="grabar" value="true">
                    <input type="hidden" id="mensaje" name="mensaje" value="Se modificó la contraseña">
                    <input type="hidden" id="NomUsuario" name="NomUsuario"
                      value="<?= $_SESSION['user']['nom_usuario'] ?>">
                    <button type="button" class="btn form-btn" data-toggle="modal" data-target="#editarContraseña">
                      Editar contraseña
                    </button>

                      <div class="modal fade" id="editarContraseña" tabindex="-1" role="dialog">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Advertencia</b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <h3 class="p-2"><b>¡Atención! ¿Desea confirmar los cambios realizados?</b></h3>
                          <div class="modal-footer d-flex ">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-primary" value="Editar Contraseña">
                          </div>
                        </div>
                      </div>

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
  <script src="<?= PATH_ASSETS.'slide/jquery-3.6.0.min.js'?>"></script>
  <script src="<?= PATH_ASSETS.'popper/popper.min.js'?>"></script>
  <script src="<?= PATH_ASSETS.'bootstrap-4.0.0/dist/js/bootstrap.min.js'?>"></script>
  <script src="<?= PATH_ASSETS.'slide/menu.js'?>"></script>
  <script src="<?= PATH_ASSETS.'slide/Show-Pass.js'?>"></script>
  <script src="<?= PATH_ASSETS.'slide/Form.js'?>"></script>
  <script>
    $('.collapse').collapse()
  </script>
</body>

</html>