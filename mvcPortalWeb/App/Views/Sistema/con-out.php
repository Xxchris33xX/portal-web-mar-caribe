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
     <div class="sidebar">
        <div class="logo-details">
          <i class='bx bx-grid-alt' ></i>
          <span class="logo_name">MarCaribe C.</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="../../Controllers/Sistema/dashboardController.php">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="link_name">Dashboard</span>
                </a>
            </li>
            <li>
              <div class="iocn-link">
                <a href="../../Controllers/Sistema/con-proController.php">
                    <i class='bx bx-basket'></i>
                    <span class="link_name">Consultar Productos</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
              </div>
              <ul class="sub-menu">
                <li><a class="link_name" href="../../Controllers/Sistema/con-proController.php">Consultar Productos</a></li>
                <li><a href="../../Controllers/Sistema/reg-proController.php">Agregar Producto</a></li>
                <li><a href="../../Controllers/Sistema/con-intController.php">Consultar Entrada</a></li>
                <li><a href="../../Controllers/Sistema/con-outController.php">Consultar Salida</a></li>
                <li><a href="../../Controllers/Sistema/con-oferController.php">Agregar Promoción</a></li>
              </ul>
            </li>
          <li>
            <div class="iocn-link">
              <a href="../../Controllers/Sistema/con-userController.php">
                <i class='bx bx-user' ></i>
                <span class="link_name">Consultar Usuarios</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="../../Controllers/Sistema/con-userController.php">Consultar Usuarios</a></li>
                <li><a href="../../Controllers/Sistema/reg-userController.php">Agregar Usuario</a></li>
            </ul>
          </li>
        <li> 
        <div class="profile-details">
          <div class="profile-content">
            <img src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/img/Person/lanegra.jpg" alt="profileImg">
          </div>
          <div class="name-job">
            <div class="profile_name">Trabajador</div>
            <div class="job">Administrador</div>
          </div>
          <i class='bx bx-log-out'></i>
        </li>
      </ul>
     </div>
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
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                              <th>
                                <label class="botones-direc" for="btn-modal-edit"><i class='bx bxs-edit'></i><span class="btn-editar">Editar</span></label>
                                <label class="botones-direc" for="btn-modal-eliminar"><i class='bx bx-x'></i><span class="btn-eliminar">Eliminar</span></label>
                              </th>

                            </tr>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                              <th>
                                <label class="botones-direc" for="btn-modal-edit"><i class='bx bxs-edit'></i><span class="btn-editar">Editar</span></label>
                                <label class="botones-direc" for="btn-modal-eliminar"><i class='bx bx-x'></i><span class="btn-eliminar">Eliminar</span></label>
                              </th>
                            </tr>
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
                            <form action="" class="form">
                              <div class="form-content">
                                <!-- INPUT NOMBRE-->
                                <div class="containerSelectProduct">
                                  <div class="select-box">
                                    <div class="options-container">
                                      <div class="option">
                                        <input 
                                        type="radio"
                                        id=""
                                        class="radio"
                                        name=""
                                        />
                                        <label for="">Producto</label>
                                      </div>
                                      <div class="option">
                                        <input 
                                        type="radio"
                                        id=""
                                        class="radio"
                                        name=""
                                        />
                                      <label for="">Producto</label>
                                      </div>
                                    </div>
                                    <div class="selected">
                                      Seleccionar un producto <i class='bx bx-chevron-down'></i>
                                    </div>
                                    <div class="search-box">
                                      <input type="text" placeholder="Criterio de busqueda">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <!-- INPUT CANTIDAD -->
                                  <input type="number" class="form-input" placeholder=" ">
                                  <label for="" class="form-label" type="number">Cantidad:</label>
                                  <span class="form-line"></span>
                                </div>
                                <div class="form-group">
                                  <!-- INPUT FECHA -->
                                  <label for="Ingreso">Fecha de Ingreso:</label>
                                  <input type="date" id="" name="">
                                </div>
                                <div class="form-group">
                                  <!-- INPUT HORA -->
                                  <label for="appt">Selecciona hora:</label>
                                  <input type="time" id="appt" name="appt">
                                </div>
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