<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Historial</title>
    <link href="<?= PATH_ASSETS.'styles/Sistema/menu.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/Sistema/c-productos.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/Sistema/modales.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/Sistema/formulario.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/Sistema/selectOptions.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'styles/Sistema/validacion.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/animations.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.min.css'?>" rel="stylesheet" type="text/css">
    <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/transformations.css'?>" rel="stylesheet" type="text/css">
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
                    <span class="current-section"><label for="btn-modal">Historial de <?= $user [0] ["nom_usuario"];?> </label></span>
                  </div>
                    <div class="Consultar-Producto">
                        <!-- VISUALIZAR ENTRADAS -->
                        <section class="Consultar-entradas">
                          <div class="tabla-entrada">
                            <table class="table table-entradas">
                              <thead>
                                <tr>
                                  <th>Código</th>
                                  <th>Acción</th>
                                  <th>Objeto</th>
                                  <th>Fecha y Hora</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php for($i=0;$i<sizeof($datos);$i++){ ?>
                                <tr>
                                  <th><?= "LOG-" . $datos [$i] ["id_historial"];?></th>
                                  <th><?= $datos [$i] ["mensaje"];?></th>
                                  <th><?= $datos [$i] ["id_entidad"];?></th>
                                  <th><?= $datos [$i] ["creado_en"];?></th>
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                          </div>
                        <!-- MODAL ELIMINAR-->
                          <div>
                            <input type="checkbox" id="btn-modal-eliminar">
                            <section class="modal-delete" id="modal-delete">
                              <div class="modal-contenedor">
                                  <h2>Precaución</h2>
                                  <i class='bx bxs-x-circle'></i>
                                  <p>Está apunto de desactivar el producto, esto hará que no se muestre en el catálogo.<br> ¿Está seguro de realizar esta acción?</p>
                                  <span class="botones"><a class="confirmar">Confirmar acción</a><label for="btn-modal-eliminar">No realizar esta acción</label></span>
                              </div>
                            </section>
                          </div>
                          <!-- MODAL EDITAR -->
                          <div>
                          <input type="checkbox" id="btn-modal-edit">
                          <section class="modal-edit" id="modal-edit">
                              <div class="modal-contenedor">
                                <label for="btn-modal-edit" class="denegar"><i class='bx bx-x-circle'></i></label>
                                <h2>Editar Entrada</h2><span class="botones">
                                <div class="Registrar-producto">
                                  <form action="" class="form" id="form-int">
                                    <div class="form-content">
                                    <div class="form-group" id="grupo__nombre">
                                      <input type="text" class="form-input" placeholder=" " name="nombre">
                                      <label for="" class="form-label" type="text">Categoria:</label>
                                      <span class="form-line"></span>
                                      <p class="formulario__input-error">La categoria tiene que ser de 4 a 16 dígitos y solo puede contener letras.</p>
                                    </div>
                                    <div class="form-group">
                                      <input type="submit" class="form-btn" value="Confirmar">
                                    </div>  
                                  </form>
                                </div>
                              </div>
                          </section>
                          </div>
                          <!-- MODAL REGISTRAR ENTRADA -->
                          <input type="checkbox" id="btn-modal-entrada">
                          <section class="modal-entrada" id="modal-edit">
                            <div class="modal-contenedor">
                              <label for="btn-modal-entrada" class="denegar"><i class='bx bx-x-circle'></i></label>
                              <h2>Registrar Categoria</h2><span class="botones">
                              <div class="Registrar-Entrada">
                                <form action="" class="form" method="POST">
                                  <div class="form-content">
                                    <!-- INPUT NOMBRE-->
                                    <div class="form-group" id="grupo__nombre">
                                      <input type="text" class="form-input" placeholder=" " name="Nom_categoria">
                                      <label for="" class="form-label" type="text">Nombre:</label>
                                      <span class="form-line"></span>
                                      <p class="formulario__input-error">La categoria tiene que ser de 4 a 16 dígitos y solo puede contener letras.</p>
                                    </div>
                                    <input type="hidden" id="grabar" name="grabar" value="true">
                                    <input type="submit" class="form-btn" value="Confirmar">
                                    </div>  
                                </form>
                              </div>
                            </div>
                          </section>
                        </section>
            </section>
                  </div>
            </section>    
    <script src="<?= PATH_ASSETS.'slide/menu.js'?>"></script>
    <script src="<?= PATH_ASSETS.'slide/selectBox.js'?>"></script>
    <script src="<?= PATH_ASSETS.'slide/Form.js'?>"></script>
</body>
</html>