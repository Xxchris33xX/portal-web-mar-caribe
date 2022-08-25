<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Productos</title>
    <link href="<?= PATH_ASSETS.'styles/Sistema/menu.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/Sistema/formulario.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/Sistema/validacion.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/animations.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.min.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/transformations.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/Sistema/reg-pro.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'bootstrap-4.0.0/dist/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'bootstrapSelect/bootstrap-select.min.css'?>" rel="stylesheet" type="text/css">
</head>
<body class="body">
    <!-- Menú -->
    <?php require('partials/menu.php') ?>
    <!-- FIN MENÚ -->
    <section class="home-section">
        <div class="home-content">
          <i class='bx bx-menu'> <span class="text">Menú</span></i>
        </div>
        <?php require('events/reg_pro.php') ?>
        <section id="Registrar-producto">
            <div class="menu-section">
              <span class="current-section">Registrar Producto</span>
            </div>
            <div class="Registrar-producto center">
              <form action="<?= FOLDER_PATH.'/reg_pro/grabar'?>" class="form product" enctype="multipart/form-data" id="formulario" method="POST" >
              <span class="requireInputs">(<span style="color:red;">*</span>) Campo obligatorio</span>
                <div class="form-content">
                  <!-- NOMBRE PRODUCTO -->
                  <div class="form-group" id="grupo__producto">
                    <input type="text" class="form-input Nombre" placeholder=" " name="Nom_producto">
                    <label for="" class="form-label" type="text">Nombre:<span style="color:red;">*</span></label>
                    <span class="form-line"></span>
                    <p class="formulario__input-error">El nombre del producto excede los 50 caracteres.</p>
                  </div>
                  <!-- CATEGORIAS -->
                  <div class="form-group category">
                    <label for="" class="form-label categoria" type="text">Categoría:</label>
                    <select id="categorias" class="form-select input-group-btn" name="Categoria"  data-live-search="true">
                    </select>
                    <span class="form-line"></span>
                  </div>
                  <!-- CANTIDAD -->
                  <!--<div class="form-group" id="grupo__cantidad">
                    <input type="number" class="form-input Cantidad" placeholder=" " name='Cantidad'/>
                    <label for="" class="form-label" type="number">Cantidad:<span style="color:red;">*</span></label>
                    <span class="form-line"></span>
                    <p class="formulario__input-error">Ingresar únicamente dígitos.</p>
                  </div>-->
                  <!-- PRECIO -->
                  <div class="form-group" id="grupo__precio">
                    <input type="text" class="form-input Precio" placeholder=" " name="Precio">
                    <label for="" class="form-label" type="text">Precio<span style="color:red;">*</span></label>
                    <span class="form-line"></span>
                    <p class="formulario__input-error">Ingresar únicamente dígitos.</p>
                  </div>
                  <!-- DESCRIPCIÓN -->
                  <div class="form-group">
                    <p type="text">Descripción</p>
                    <div class="actionsContent">
                    <a id="editTextAreaBtn"><i class='bx bxs-edit-alt'><span>Editar</span></i></a>
                    </div>
                    <textarea class="productDescript" id="textArea" name="Descripcion" id="" cols="30" rows="5" maxlength="255" disabled>Producto de Mar Caribe Center</textarea>
                    <div><span id="textCounter"></span>/255</div>
                  </div>
                  <!-- IMAGEN -->
                  <div class="form-group">
                    <input type="file" class="form-input Imagen" placeholder="" name="Imagen" required>
                    <label for="" class="form-label" type="text">Imagen<span style="color:red;">*</span></label>
                    <span class="form-line"></span>
                  </div>
                  <input type="hidden" id="Mensaje" name="Mensaje" value="Se registró el producto">
                  <button type="submit" class="form-btn" id="Btn-submit">
                    Registrar Producto
                  </button>
                </div>  
              </form>
            </div>
          </section>
    </section>
    <script>
      const host = '<?= HOSTING ?>';
      const path = '<?= FOLDER_PATH ?>';
      const pathImages = '<?= PATH_ASSETS.'img/Productos/'?>';
    </script>   
    <script src="<?= PATH_ASSETS.'slide/menu.js'?>"></script>   
    <script src="<?= PATH_ASSETS.'slide/Form3.js'?>"></script>
    <script src="<?= PATH_ASSETS.'slide/textAreaCount.js'?>"></script>
    <script src="<?= PATH_ASSETS.'slide/jquery-3.6.0.min.js'?>"></script>
    <script src="<?= PATH_ASSETS.'popper/popper.min.js'?>"></script>
    <script src="<?= PATH_ASSETS.'bootstrap-4.0.0/dist/js/bootstrap.min.js'?>"></script>
    <script src="<?= PATH_ASSETS.'bootstrapSelect/bootstrap-select.min.js'?>"></script>
    <script src="<?= PATH_ASSETS.'js/validaciones/formRegpro.js'?>"></script>
</body>
</html>