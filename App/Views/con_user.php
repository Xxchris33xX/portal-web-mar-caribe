<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Usuario</title>
    <link href="<?= PATH_ASSETS.'styles/Sistema/menu.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/Sistema/formulario.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/Sistema/reg-user.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/Sistema/validacion.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/Sistema/modales.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/Sistema/c-usuarios.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'bootstrap-4.0.0/dist/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/animations.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.min.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/transformations.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'css/main.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'css/style.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'DataTables/datatables.min.css'?>" rel="stylesheet" type="text/css">
  </head>
<body>
    <!-- Menú -->
    <?php require('partials/menu.php') ?>
    <!-- FIN MENÚ -->
    <section class="home-section">
        <div class="home-content">
          <i class='bx bx-menu'><span class="text">Menú</span></i>
        </div>
        <section id="Consultar-Usuario">
            <div class="menu-section">
              <span class="current-section">Consultar Usuarios</span>
            </div>
            <?php require('events/con-user.php');?>
            <div class="Consultar-usuario">
                <!-- TABLA CONSULTAR USUARIOS -->
                <div class="row">
                     <div class="col-md-12">
                       <div class="tile">
                         <div class="tile-body">
                           <div class="table-responsive">
                            <table class="table display responsive nowrap" id="tableUsers">
                               <thead>
                                 <tr>
                                 <th>Nombre</th>
                                 <th>Apellido</th>
                                 <th>Usuario</th>
                                 <th>Cedula</th>
                                 <th>Rol</th>
                                 <th>Acciones</th>
                                 </tr>
                               </thead>
                               <tbody>
                               </tbody>
                            </table>
                           </div>
                         </div>
                       </div>
                     </div>
               </div>
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
                 <!-- MODAL-INFORMACION DE CONTACTO-USUARIO -->
                <?php require_once('partials/modalActiveUsers.php') ?>
                <?php require_once('partials/modalHistoryUser.php') ?>
                <?php require_once('partials/modalDeleteUser.php') ?>
                <?php require_once('partials/modalShowInfoUser.php') ?>
                <?php require_once('partials/modalEditUser.php') ?>
            </div>            
        </section>
    <?php $userID = empty($_GET['id']) ? ' ' : $_GET['id'] ?>
    <script>
      const host = '<?= HOSTING ?>';
      const path = '<?= FOLDER_PATH ?>';
      const idUser = '<?= $userID ?>'
    </script> 
    <script src="<?= PATH_ASSETS.'slide/menu.js'?>"></script>
    <script src="<?= PATH_ASSETS.'slide/Show-Pass2.js'?>"></script>
    <script src="<?= PATH_ASSETS.'slide/Form2.js'?>"></script>
    <script src="<?= PATH_ASSETS.'slide/jquery-3.6.0.min.js'?>"></script>
    <script src="<?= PATH_ASSETS.'popper/popper.min.js'?>"></script>
    <script src="<?= PATH_ASSETS.'bootstrap-4.0.0/dist/js/bootstrap.min.js'?>"></script>
    <script src="<?= PATH_ASSETS.'DataTables/datatables.min.js'?>"></script>
    <script src="<?= PATH_ASSETS.'DataTables/data-eu.js'?>"></script>
    <script src="<?= PATH_ASSETS.'table/tableUser.js'?>"></script>
    <script src="<?= PATH_ASSETS.'js/validaciones/formEditUsers.js'?>"></script>
    <script>
      $('[data-toggle="tooltip"]').tooltip()
    </script>
</body>
</html>