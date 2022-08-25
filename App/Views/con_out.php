<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultar Salida</title>
  <link href="<?= PATH_ASSETS.'styles/Sistema/menu.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'styles/Sistema/c-productos.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'styles/Sistema/formulario.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'styles/Sistema/validacion.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'bootstrap-4.0.0/dist/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/animations.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.min.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/transformations.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'bootstrapSelect/bootstrap-select.min.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'css/main.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'css/style.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'DataTables/datatables.min.css'?>" rel="stylesheet" type="text/css">
</head>

<body>
  <!-- Menú -->
  <?php require('partials/menu.php') ?>
  <!-- GESTIONAR PRODUCTO -->
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'> <span class="text">Menú</span></i>

    </div>
    <section id="Consultar-Producto">
      <?php require('events/con_out.php') ?>
      <div class="Consultar-Producto">
        <!-- VISUALIZAR ENTRADAS -->
        <div class="menu-section">
          <span class="current-section"><label for="btn-modal"> Consultar Salidas</label></span>
        </div>
        <div class="tabla-salida">
        <button type="button" class="btn btn-primary w-25 m-1" data-toggle="modal" data-target=".bd-example-modal-lg">Registrar Salida</button>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="tile">
              <div class="tile-body">
                <div class="table-responsive">
                  <table class="table display responsive nowrap" id="tableOuts">
                    <thead>
                      <tr>
                        <th>Código</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Fecha</th>
                        <th>Hora</th>
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
        <!-- MODAL REGISTRAR SALIDA -->
        <?php require_once('partials/modalRegSalida.php') ?>
      </div>
    </section>
  </section>
  </div>
  </section>
  <script>
    const host = '<?= HOSTING ?>';
    const path = '<?= FOLDER_PATH ?>';
  </script>
  <script src="<?= PATH_ASSETS.'slide/menu.js'?>"></script>
  <script src="<?= PATH_ASSETS.'slide/selectBox.js'?>"></script>
  <script src="<?= PATH_ASSETS.'slide/Form.js'?>"></script>
  <script src="<?= PATH_ASSETS.'slide/jquery-3.6.0.min.js'?>"></script>
  <script src="<?= PATH_ASSETS.'popper/popper.min.js'?>"></script>
  <script src="<?= PATH_ASSETS.'bootstrap-4.0.0/dist/js/bootstrap.min.js'?>"></script>
  <script src="<?= PATH_ASSETS.'bootstrapSelect/bootstrap-select.min.js'?>"></script>
  <script src="<?= PATH_ASSETS.'DataTables/datatables.min.js'?>"></script>
  <script src="<?= PATH_ASSETS.'DataTables/OrderStrings/orderThStrings.js'?>"></script>
  <script src="<?= PATH_ASSETS.'table/tableSalidas.js'?>"></script>
</body>