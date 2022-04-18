<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Productos</title>
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/menu.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/c-productos.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/modales.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/formulario.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/validacion.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/reg-pro.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/animations.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.min.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/transformations.css" rel="stylesheet" type="text/css">
    <script>
        function eliminar(url){
            if(confirm("¿Desea eliminar este producto?")){
                window.location=url;
            }
        }
    </script>
  </head>
<body>
    <!-- Menú -->
    <?php require('partials/menu.php') ?>
    <!-- FIN MENÚ -->
    <!-- GESTIONAR PRODUCTO -->
    <section class="home-section">
        <div class="home-content">
          <i class='bx bx-menu'> <span class="text">Menú</span></i>
          <p class="welcome">Bienvenido Usuario#1</p>
        </div>
        <section id="Consultar-Producto">
            <div class="menu-section">
                <span class="current-section">Gestionar Productos</span>
            </div>
                <div class="Consultar-Producto">
                    <table class="table">
                        <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Categoría</th>
                              <th>Cantidad</th>
                              <th>Precio</th>
                              <th>Descripción</th>
                              <th>Imagen</th>
                              <th>Estado</th>
                              <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for($i=0;$i<sizeof($datos);$i++){ ?>
                            <tr>
                              <th><?php echo $datos [$i] ["nombre"];?></th>
                              <th><?php echo $datos [$i] ["nom_categoria"];?></th>
                              <th><?php echo $datos [$i] ["cantidad"],'&nbspunidades';?></th>
                              <th><?php echo $datos [$i] ["precio"],'$';?></th>
                              <th>
                                <label class="botones-direc" for="btn-modal-descripción"><i class='bx bxs-book-content'></i></label>
                                <!-- MODAL DESCRIPCIÓN  -->
                    <div>
                      <input type="checkbox" id="btn-modal-descripción">
                      <section class="modal-descripción" id="btn-modal-descripción">
                          <div class="modal-contenedor">
                            <label for="btn-modal-descripción" class="denegar"><i class='bx bx-x-circle'></i></label>
                            <h2>Editar descripción</h2><span class="botones">
                            <div class="Registrar-producto">
                              <form action="" class="form" method="POST" >
                                <div class="form-content">
                                  <div class="form-group">
                                    <div class="actionsContent">
                                     <a id="editTextAreaBtn"><i class='bx bxs-edit-alt'><span>Editar</span></i></a>
                                    </div>
                                    <textarea class="productDescript" id="textArea" name="Descripcion" id="" cols="30" rows="5" maxlength="100" disabled><?php echo $datos [$i] ["descripcion"],'$';?></textarea>
                                    <div><span id="textCounter"></span>/100</div>
                                  </div>
                                  <input type="submit" class="form-btn" value="Confirmar">
                                </div>  
                                
                              </form>
                              </th>
                              <th><img height="75" width="auto" src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Productos/<?php echo $datos [$i] ["imagen"];?>"> </th>
                              <th><?php echo $datos [$i] ["nom_estatus"];?></th>
                              <th>
                                <label class="botones-direc" for="btn-modal-edit"><i class='bx bxs-edit'></i><span class="btn-editar"><a href="edt-proController.php?id=<?php echo $datos [$i] ["id_producto"];?>">Editar</a></span></label>
                                <label class="botones-direc" for="btn-modal-eliminar"><i class='bx bx-x'></i><span class="btn-eliminar"><a href="javascript:void(0);" title="Eliminar <?php echo $datos [$i] ["nombre"];?>" onclick=" eliminar ('../../helpers/delete.php?id=<?php echo $datos [$i] ['id_producto'];?>')">Eliminar</a></span></label>
                              </th>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <!-- MODAL ELIMINAR-->
                    <div>
                      <input type="checkbox" id="btn-modal-eliminar">
                      <section class="modal-delete" id="modal-delete">
                        <div class="modal-contenedor">
                            <h2>Precaución</h2>
                            <i class='bx bxs-x-circle'></i>
                            <p>Está apunto de desactivar el producto, esto hará que no se muestre en el catálogo.<br> ¿Está seguro de realizar esta acción?</p>
                            <?php for($i=0;$i<sizeof($datos);$i++){ ?>
                            <span class="botones"><label for="btn-modal-eliminar">No realizar esta acción</label><a class="confirmar" href="javascript:void(0);" title="Eliminar <?php echo $datos [$i] ["nombre"];?>" onclick=" eliminar ('../../helpers/delete.php?id=<?php echo $datos [$i] ['id_producto'];?>')">Confirmar acción</a></span>
                            <?php } ?>
                          </div>
                      </section>
                    </div>
                    <!-- MODAL EDITAR -->
                    <div>
                    <input type="checkbox" id="btn-modal-edit">
                    <section class="modal-edit" id="modal-edit">
                        <div class="modal-contenedor">
                          <label for="btn-modal-edit" class="denegar"><i class='bx bx-x-circle'></i></label>
                          <h2>Editar producto</h2><span class="botones">
                            <div class="Registrar-producto">
                              <form action="" class="form" id="formulario" method="POST" >
                                <div class="form-content">
                                  <!-- NOMBRE PRODUCTO -->
                                  <div class="form-group" id="grupo__producto">
                                    <input type="text" class="form-input" placeholder=" " name="Nombre" value="<?php echo $datos['2']["Nombre"];?>">
                                    <label for="" class="form-label" type="text">Nombre:</label>
                                    <span class="form-line"></span>
                                    <p class="formulario__input-error">El producto tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
                                  </div>
                                  <!-- CATEGORIAS -->
                                  <div class="form-group">
                                    <label for="" class="form-label categoria" type="text">Categoría:
                                      <select id="cars" class="form-select">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="opel">Opel</option>
                                        <option value="audi">Audi</option>
                                      </select>
                                    </label>
                                    <span class="form-line"></span>
                                  </div>
                                  <!-- ESTADO -->
                                  <div class="form-group estado">
                                    <label for="" class="form-label" type="text">Estado:</label>
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider"></span>
                                    </label>
                                  </div>
                                  <!-- CANTIDAD -->
                                  <div class="form-group" id="grupo__cantidad">
                                    <input type="text" class="form-input" placeholder=" " name='cantidad' maxlength="2"/>
                                    <label for="" class="form-label" type="number">Cantidad:</label>
                                    <span class="form-line"></span>
                                    <p class="formulario__input-error">Ingresar únicamente dígitos numéricos.</p>
                                  </div>
                                  <!-- PRECIO -->
                                  <div class="form-group" id="grupo__precio">
                                    <input type="text" class="form-input" placeholder=" " name="precio" maxlength="4">
                                    <label for="" class="form-label" type="text">Precio</label>
                                    <span class="form-line"></span>
                                    <p class="formulario__input-error">Ingresar únicamente dígitos numéricos.</p>
                                  </div>
                                  <div class="form-group">
                                    <input type="file" class="form-input" placeholder=" ">
                                    <label for="" class="form-label" type="text">Imagen</label>
                                    <span class="form-line"></span>
                                  </div>
                                  <input type="submit" class="form-btn" value="Registrar Producto">
                                </div>  
                              </form>
                            </div>
                        </div>
                    </section>
                    </div>
                    <!-- MODAL DESCRIPCIÓN  -->
                    <div>
                      <input type="checkbox" id="btn-modal-descripción">
                      <section class="modal-descripción" id="btn-modal-descripción">
                          <div class="modal-contenedor">
                            <label for="btn-modal-descripción" class="denegar"><i class='bx bx-x-circle'></i></label>
                            <h2>Editar descripción</h2><span class="botones">
                            <div class="Registrar-producto">
                              <form action="" class="form">
                                <div class="form-content">
                                  <div class="form-group">
                                    <div class="actionsContent">
                                     <a id="editTextAreaBtn"><i class='bx bxs-edit-alt'><span>Editar</span></i></a>
                                    </div>
                                    <textarea class="productDescript" id="textArea" name="" id="" cols="30" rows="5" maxlength="100" disabled></textarea>
                                    <div><span id="textCounter"></span>/100</div>
                                  </div>
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
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/textAreaCount.js"></script>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/menu.js"></script>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/Form.js"></script>
</body>
</html>