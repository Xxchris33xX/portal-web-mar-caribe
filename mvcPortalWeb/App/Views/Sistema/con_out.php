<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Entrada</title>
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/menu.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/c-productos.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/modales.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/formulario.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/validacion.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/selectOptions.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/animations.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.min.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/transformations.css" rel="stylesheet" type="text/css">
</head>
<body>
     <!-- Menú -->
     <?php require('partials/menu.php') ?>
     <!-- GESTIONAR PRODUCTO -->
     <section class="home-section">
        <div class="home-content">
          <i class='bx bx-menu'> <span class="text">Menú</span></i>
          <p class="welcome">Bienvenido Usuario#1</p>
        </div>
        <section id="Consultar-Producto">
                <div class="Consultar-Producto">
                    <!-- VISUALIZAR ENTRADAS -->
                    <div class="menu-section">
                        <span class="current-section"><label for="btn-modal"> Consultar Salidas</label></span>
                      </div>
                      <div class="tabla-salida">
                        <label for="btn-modal-salida"><span class="Registrar">Registrar Salida</span></label>
                        <table class="table table-salidas">
                          <thead>
                            <tr>
                                <th>Código</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Fecha y Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for($i=0;$i<sizeof($salida);$i++){ ?>
                                <tr>
                                  <th><?php echo "OUT-". $salida [$i] ["id_salida"];?></th>
                                  <th><?php echo $salida [$i] ["nombre"];?></th>
                                  <th><?php echo '- '. $salida [$i] ["cantidad_salida"] .' Unidades';?></th>
                                  <th><?php echo $salida [$i] ["fecha_hora"];?></th>
                                </tr>
                                <?php } ?>
                          </tbody>
                        </table>
                      </div>
                      <!-- MODAL REGISTRAR SALIDA --> 
                      <input type="checkbox" id="btn-modal-salida">
                      <section class="modal-salida" id="modal-edit">
                        <div class="modal-contenedor">
                          <label for="btn-modal-salida" class="denegar"><i class='bx bx-x-circle'></i></label>
                          <h2>Registrar Salida</h2><span class="botones">
                          <div class="Registrar-Salida">
                            <form action="<?php echo FOLDER_PATH.'/sistema/con_out/grabar'?>" method="POST" class="form">
                              <div class="form-content">
                                <!-- INPUT NOMBRE-->
                                <div class="containerSelectProduct">
                                  <select id="" class="form-select" name="id">
                                      <?php for($i=0;$i<sizeof($datos);$i++){ ?>
                                      <option value="<?php echo $datos [$i] ["id_producto"];?>" ><?php echo $datos [$i] ["nombre"];?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                  <!-- INPUT CANTIDAD -->
                                  <input type="number" class="form-input" name="Cantidad" placeholder=" ">
                                  <label for="" class="form-label" type="number">Cantidad:</label>
                                  <span class="form-line"></span>
                                </div>
                                </div>
                                <div class="form-group">
                                <input type="hidden" id="grabar" name="grabar" value="salida">
                                <input type="submit" class="form-btn" value="Confirmar">
                              </div>  
                            </form>
                          </div>
                        </div>
                      </section>
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
                              <form action="" class="form">
                                <div class="form-content">
                                <div class="form-group">
                                  <!-- INPUT CANTIDAD -->
                                  <input type="number" class="form-input" placeholder=" ">
                                  <label for="" class="form-label" type="number">Cantidad:</label>
                                  <span class="form-line"></span>
                                </div>
                                <div class="form-group">
                                  <input type="submit" class="form-btn" value="Confirmar">
                                </div>  
                              </form>
                            </div>
                          </div>
                      </section>
                      </div>
                    </section>
        </section>
              </div>
        </section>
<script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/selectBox.js"></script>    
<script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/menu.js"></script>
<script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/Form.js"></script>
</body>