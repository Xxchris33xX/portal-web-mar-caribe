<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Usuario</title>
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/menu.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/formulario.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/reg-user.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/validacion.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/modales.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/c-usuarios.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/animations.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.min.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/transformations.css" rel="stylesheet" type="text/css">
    <script>
        function eliminar(url){
            if(confirm("¿Desea eliminar este usuario?")){
                window.location=url;
            }
        }
    </script>
  </head>
<body>
    <!-- Menú -->
    <?php require('partials/menu.php') ?>
    <!-- FIN MENÚ -->
    <section class="home-section">
        <div class="home-content">
          <i class='bx bx-menu'><span class="text">Menú</span></i>
          <p class="welcome">Bienvenido Usuario#1</p>
        </div>
        <section id="Consultar-Usuario">
            <div class="menu-section">
              <span class="current-section">Gestionar Usuarios</span>
            </div>
            <div class="Consultar-usuario">
                <!-- TABLA CONSULTAR USUARIOS -->
                <table class="table">
                  <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Usuario</th>
                        <th>Cedula</th>
                        <th>Rol</th>
                        <th>Estado</th>
                        <th>Información</th>
                        <th>Historial</th>
                        <th>Acciones</th>
                      </tr>
                  </thead>
                  
                  <tbody>
                  <?php for($i=0;$i<sizeof($datos);$i++){ ?>
                      <tr>
                        <th><?php echo $datos [$i] ["nombre"];?></th>
                        <th><?php echo $datos [$i] ["apellido"];?></th>
                        <th><?php echo $datos [$i] ["nom_usuario"];?></th>
                        <th><?php echo $datos [$i] ["cedula"];?></th>
                        <th><?php echo $datos [$i] ["nom_rol"];?></th>
                        <th><?php echo $datos [$i] ["nom_estatus"];?></th>
                        <th>
                          <label class="botones-direc" for="btn-modal-user"><i class='bx bxs-book-content'></i></label>
                        </th>
                        <th>
                          <label class="botones-direc" for="log"><a name="log" id="log" href="con-logController.php?id=<?php echo $datos [$i] ["id_usuario"];?>"><i class='bx bx-history'></i></a></label>
                        </th>
                        <th>
                            <label class="botones-direc" for="btn-modal-edit-user"><i class='bx bxs-edit'></i><span class="btn-editar"><a href="<?php echo FOLDER_PATH.'/sistema/edt_user//?id='. $datos [$i] ["id_usuario"];?>">Editar</a></span></label>
                            <label class="botones-direc" for="btn-modal-eliminar-user"><i class='bx bx-x'></i><span class="btn-eliminar"><a href="javascript:void(0);" title="Eliminar <?php echo $datos [$i] ["nombre"];?>" onclick=" eliminar ('<?php echo FOLDER_PATH.'/sistema/con_user/eliminar/?id='. $datos [$i] ['id_usuario'];?>')">Eliminar</a></span></label>
                        </th>
                      </tr>
                      <?php
        }
        //print_r($datos);
                      ?>
                  </tbody>
                </table>
               <!-- HISTORIAL-ACCIONES-USUARIO -->
               <div>
                <input type="checkbox" id="btn-modal-historial">
                <section class="modal-history" id="modal-history">
                    <div class="modal-contenedor">
                        <label for="btn-modal-historial" class="denegar"><i class='bx bx-x-circle'></i></label>
                        <h2>Historial de acciones</h2><span class="botones">
                          <div class="Registrar-usuario">
                            <table class="table historial">
                              <thead>
                                  <tr>
                                    <th>Fecha</th>
                                    <th>Acción</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <th>Fecha</th>
                                    <th>Acción</th>
                                  </tr>
                              </tbody>
                            </table>
                          </div>
                    </div>
                </section>
                </div>
               <!-- MODAL-ELIMINAR-USUARIO -->
               <div>
                 <input type="checkbox" id="btn-modal-eliminar-user">
                 <section class="modal-delete" id="modal-delete">
                   <div class="modal-contenedor">
                       <h2>Precaución</h2>
                       <i class='bx bxs-x-circle'></i>
                       <p>Está apunto de desactivar al usuario, esto inhabilitará su acceso al sistema.<br> ¿Está seguro de realizar esta acción?</p>
                       <span class="botones"><a class="confirmar">Confirmar acción</a><label for="btn-modal-eliminar-user">No realizar esta acción</label></span>
                   </div>
                 </section>
               </div>
               <!-- MODAL-EDITAR-USUARIO -->
               <div>
                 <input type="checkbox" id="btn-modal-edit-user">
                 <section class="modal-edit" id="modal-edit">
                     <div class="modal-contenedor">
                       <label for="btn-modal-edit-user" class="denegar"><i class='bx bx-x-circle'></i></label>
                       <h2>Editar<br> información de usuario</h2><span class="botones">
                        <div class="Registrar-usuario">
                          <form action="" class="form">
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
                              <div class="form-group-contact">
                                  <!-- INPUT NOMBRE -->
                                  <div class="form-div">
                                    <input type="text" class="form-input" placeholder=" " name="nombre">
                                    <label for="" class="form-label" type="text">Nombre:</label>
                                  </div>
                                  <!-- INPUT APELLIDO -->
                                  <div class="form-div">
                                  <input type="text" class="form-input" placeholder=" " name="apellido">
                                  <label for="" class="form-label" type="text">Apellido:</label>
                                  </div>
                              </div>
                              <div class="form-group-contact">
                                <!-- INPUT NOMBRE USUARIO -->
                                <div class="form-div">
                                  <input type="text" class="form-input" placeholder=" " name="usuario">
                                  <label for="" class="form-label" type="text">Usuario:</label>
                                </div>  
                                <!-- INPUT CÉDULA -->
                                <div class="form-div">
                                <input type=number class="form-input" placeholder=" ">
                                <label for="" class="form-label" type="text">Cédula:</label>
                                </div>
                              </div>
                              <div class="form-group-contact">
                                <!-- INPUT ESTADO -->
                                <div class="form-div">
                                    <label for="" class="form-label" type="text">Estado:</label>
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider"></span>
                                    </label>
                                </div>  
                                <!-- INPUT ROL -->
                                <div class="form-div">
                                  <label for="" class="form-label categoria" type="text">Rol:
                                    <select id="" class="form-select">
                                      <option value="Operador">Operador</option>
                                      <option value="Administrador">Administrador</option>
                                    </select>
                                  </label>
                                </div>
                              </div>
                              <div class="form-group" id="grupo__password" >
                                <!-- INPUT CONTRASEÑA -->
                                <input type="password" class="form-input" placeholder=" " id="password" name="password">
                                <label for="" class="form-label" type="text">Contraseña:</label>
                                <i class='bx bx-low-vision' id="togglePassword"></i>
                                <p class="formulario__input-error">La contraseña tiene que ser de 8 a 12 dígitos.</p>
                              </div>
                              <div class="form-group" id="grupo__password2">
                                <!-- INPUT CONTRASEÑA2 -->
                                <input type="password" class="form-input" placeholder=" " id="password2" name="password2">
                                <label for="" class="form-label" type="text">Repetir Contraseña:</label>
                                <i class='bx bx-low-vision' id="togglePassword2"></i>
                                <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
                              </div>
                              <input type="submit" class="form-btn" value="Confirmar cambios">
                            </div>  
                          </form>
                        </div>
                     </div>
                 </section>
               </div>
                 <!-- MODAL-INFORMACION DE CONTACTO-USUARIO -->
                <div>
                <input type="checkbox" id="btn-modal-user">
                <section class="modal-user" id="modal-user">
                    <div class="modal-contenedor">
                        <label for="btn-modal-user" class="denegar"><i class='bx bx-x-circle'></i></label>
                        <h2>Editar<br> información de contacto</h2><span class="botones">
                          <div class="Registrar-usuario">
                            <form action="" class="form">
                              <div class="form-content">
                                <div class="form-group" id="grupo__direccion">
                                   <!-- INPUT DIRECCIÓN -->
                                    <input type="text" class="form-input" placeholder=" " name="direccion">
                                    <label for="" class="form-label" type="text">Dirección</label>
                                    <p class="formulario__input-error">La direccion tiene que tener más de 4 dígitos.</p>
                                  </div>
                                  <div class="form-group-contact">
                                    <!-- INPUT TELÉFONO -->
                                    <div class="form-div">
                                      <input type="number" class="form-input" placeholder=" ">
                                      <label for="" class="form-label" type="text">Teléfono</label>
                                    </div> 
                                    <!-- INPUT CORREO -->
                                    <div class="form-div">
                                      <input type="email" class="form-input" placeholder=" " name="correo">
                                      <label for="" class="form-label" type="text">Correo</label>
                                    </div>
                                </div>
                                <p class="formulario__input-error" id="grupo__correo">
                                  El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.
                                </p>
                                <input type="submit" class="form-btn" value="Confirmar cambios">
                              </div>  
                            </form>
                          </div>
                    </div>
                </section>
                </div>
            </div>
        </section>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/menu.js"></script>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/Show-Pass.js"></script>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/Form.js"></script>
</body>
</html>