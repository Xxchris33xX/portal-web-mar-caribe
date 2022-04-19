<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Categorias</title>
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/menu.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/dashboard.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/c-productos.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/modales.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/formulario.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/selectOptions.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/validacion.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/animations.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.min.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/transformations.css" rel="stylesheet" type="text/css">
    <script>
        function eliminar(url){
            if(confirm("¿Desea eliminar esta categoria?")){
                window.location=url;
            }
        }
    </script>
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
                <div class="menu-section">
                    <span class="current-section"><label for="btn-modal"> Consultar Categorias</label></span>
                  </div>
                    <div class="Consultar-Producto">
                        <!-- VISUALIZAR ENTRADAS -->
                        <section class="Consultar-entradas">
                          <div class="tabla-entrada">
                            <label for="btn-modal-entrada"><span class="Registrar">Registrar categoria</span></label>
                            <table class="table table-entradas">
                              <thead>
                                <tr>
                                  <th>Código</th>
                                  <th>Nombre</th>
                                  <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php for($i=0;$i<sizeof($datos);$i++){ $i; ?>
                                <tr>
                                  <th><?php echo 'CAT-' .sizeof($datos)-$i;?></th>
                                  <th>
                                  <form class="form-infouser1" method="POST" action="<?php echo FOLDER_PATH.'/sistema/con_cat/grabar'?>">
                                    <input class="inputCat"type="text" name="Nom_categoria" value="<?php echo $datos [$i]["nom_categoria"];?>" disabled>
                                    <input type="hidden" name="id" id="id" value="<?php echo $datos [$i]["id_categoria"];?>">
                                    <input type="hidden" id="grabar" name="grabar" value="insertar">
                                    <button  class="button-confirm2" name="grabar" id="grabar" value="editar"><i class='bx bx-check-circle'></i></button>
                                    <i id="btnEditinfo2" class='edit bx bx-edit-alt'></i>
                                  </form>
                                  </th>
                                  <th>
                                    <label class="botones-direc" for="btn-modal-eliminar"><i class='bx bx-x'></i><span class="btn-eliminar"><a href="javascript:void(0);" title="Eliminar <?php echo $datos [$i] ["nom_categoria"];?>" onclick=" eliminar ('<?php echo FOLDER_PATH.'/sistema/con_cat/eliminar/?id='. $datos [$i] ['id_categoria'];?>')">Eliminar</a></span></label>
                                  </th>
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
                          <!-- MODAL REGISTRAR ENTRADA -->
                          <input type="checkbox" id="btn-modal-entrada">
                          <section class="modal-entrada" id="modal-edit">
                            <div class="modal-contenedor">
                              <label for="btn-modal-entrada" class="denegar"><i class='bx bx-x-circle'></i></label>
                              <h2>Registrar Categoria</h2><span class="botones">
                              <div class="Registrar-Entrada">
                                <form action="<?php echo FOLDER_PATH.'/sistema/con_cat/grabar'?>" class="form" method="POST">
                                  <div class="form-content">
                                    <!-- INPUT NOMBRE-->
                                    <div class="form-group" id="grupo__nombre">
                                      <input type="text" class="form-input" placeholder=" " name="Nom_categoria">
                                      <label for="" class="form-label" type="text">Nombre:</label>
                                      <span class="form-line"></span>
                                      <p class="formulario__input-error">La categoria tiene que ser de 4 a 16 dígitos y solo puede contener letras.</p>
                                    </div>
                                   <!-- <input type="hidden" id="accion" name="accion" value="0">
                                    <input type="hidden" id="entidad" name="entidad" value="2">-->
                                    <input type="hidden" id="grabar" name="grabar" value="insertar">
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
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/infoUserEdit.js"></script>    
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/menu.js"></script>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/selectBox.js"></script>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/Form.js"></script>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/editNameCat.js"></script>
</body>
</html>