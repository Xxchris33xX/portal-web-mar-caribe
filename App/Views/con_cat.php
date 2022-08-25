<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultar Categorias</title>
  <link href="<?= PATH_ASSETS.'styles/Sistema/menu.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'styles/Sistema/dashboard.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'styles/Sistema/c-productos.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'styles/Sistema/modales.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'styles/Sistema/formulario.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'styles/Sistema/selectOptions.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'styles/Sistema/validacion.css'?>" rel="stylesheet" type="text/css">
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
  <!-- GESTIONAR PRODUCTO -->
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'> <span class="text">Menú</span></i>

    </div>
    <section id="Consultar-Producto">
      <div class="menu-section">
        <span class="current-section"><label for="btn-modal"> Consultar Categorias</label></span>
      </div>
      <?php require('events/con-cats.php');?>
      <div class="Consultar-Producto">
        <!-- VISUALIZAR ENTRADAS -->
        <section class="Consultar-entradas">
          <div class="tabla-entrada">
            <label for="btn-modal-entrada"><span class="Registrar">Registrar categoria</span></label>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table display responsive nowrap" id="tableCats">
                      <thead>
                        <tr>
                          <th>Código</th>
                          <th>Nombre</th>
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
          <!-- MODAL ELIMINAR-->
          <div>
            <input type="checkbox" id="btn-modal-eliminar">
            <section class="modal-delete" id="modal-delete">
              <div class="modal-contenedor">
                <h2>Precaución</h2>
                <i class='bx bxs-x-circle'></i>
                <p>Está apunto de desactivar el producto, esto hará que no se muestre en el catálogo.<br> ¿Está seguro
                  de realizar esta acción?</p>
                <span class="botones"><a class="confirmar">Confirmar acción</a><label for="btn-modal-eliminar">No
                    realizar esta acción</label></span>
              </div>
            </section>
          </div>
          <!-- MODAL REGISTRAR CATEGORIA -->
          <input type="checkbox" id="btn-modal-entrada">
          <section class="modal-entrada" id="modal-edit">
            <div class="modal-contenedor">
              <label for="btn-modal-entrada" class="denegar"><i class='bx bx-x-circle closeBtnCat'></i></label>
              <h2>Registrar Categoria</h2><span class="botones">
                <div class="Registrar-Entrada">
                  <form action="<?= FOLDER_PATH.'/con_cat/grabar'?>" class="form" method="POST"
                    id="formularioCrearCategoria">
                    <div class="form-content">
                      <!-- INPUT NOMBRE-->
                      <div class="form-group" id="grupo__nombre">
                        <input type="text" class="form-input Nombre" placeholder=" " name="Nom_categoria" required>
                        <label for="" class="form-label" type="text">Nombre:<span style="color:red;">*</span></label>
                        <span class="form-line"></span>
                        <p class="formulario__input-error">El nombre solo puede contener letras.</p>
                      </div>
                      <input type="hidden" id="mensaje" name="Mensaje" value="Se registró una categoria">
                      <input type="hidden" id="grabar" name="grabar" value="insertar">
                      <button type="submit" class="form-btn">
                        Confirmar
                      </button>
                    </div>
                  </form>
                </div>
            </div>
          </section>
        </section>
    </section>
    </div>
  </section>
  <?php require('partials/modalDeleteCategory.php') ?>
  <?php require('partials/modalEditCategory.php') ?>

  <script>
    const host = '<?= HOSTING ?>';
    const path = '<?= FOLDER_PATH ?>';
    const grabar = '<?= HOSTING.FOLDER_PATH."/con_cat/grabar"?>';
  </script>
  <script src="<?= PATH_ASSETS.'slide/menu.js'?>"></script>
  <script src="<?= PATH_ASSETS.'slide/selectBox.js'?>"></script>
  <script src="<?= PATH_ASSETS.'slide/Form.js'?>"></script>
  <script src="<?= PATH_ASSETS.'slide/jquery-3.6.0.min.js'?>"></script>
  <script src="<?= PATH_ASSETS.'popper/popper.min.js'?>"></script>
  <script src="<?= PATH_ASSETS.'bootstrap-4.0.0/dist/js/bootstrap.min.js'?>"></script>
  <script src="<?= PATH_ASSETS.'DataTables/datatables.min.js'?>"></script>
  <script src="<?= PATH_ASSETS.'DataTables/OrderStrings/orderThStrings.js'?>"></script>
  <script src="<?= PATH_ASSETS.'table/tableCats.js'?>"></script>
  <script src="<?= PATH_ASSETS.'slide/editCategory.js'?>"></script>
  <script src="<?= PATH_ASSETS.'js/validaciones/formNewCat.js'?>"></script>
</body>

</html>