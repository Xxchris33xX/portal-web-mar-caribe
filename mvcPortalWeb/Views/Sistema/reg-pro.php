<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Productos</title>
    <link href="../../Helpers/styles/Sistema/menu.css" rel="stylesheet" type="text/css">
    <link href="../../Helpers/styles/Sistema/formulario.css" rel="stylesheet" type="text/css">
    <link href="../../Helpers/styles/Sistema/reg-pro.css" rel="stylesheet" type="text/css">
    <link href="../../Helpers/styles/Sistema/validacion.css" rel="stylesheet" type="text/css">
    <link href="../../Helpers/boxicons-2.1.1/css/animations.css" rel="stylesheet" type="text/css">
    <link href="../../Helpers/boxicons-2.1.1/css/boxicons.css" rel="stylesheet" type="text/css">
    <link href="../../Helpers/boxicons-2.1.1/css/boxicons.min.css" rel="stylesheet" type="text/css">
    <link href="../../Helpers/boxicons-2.1.1/css/transformations.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- Menú -->
    <div class="sidebar close">
      <div class="logo-details">
        <i class='bx bx-grid-alt' ></i>
        <span class="logo_name">MarCaribe C.</span>
      </div>
      <ul class="nav-links">
          <li>
              <a href="../../Controllers/Sistema/dasboardController.php">
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
          <img src="../../Helpers/img/Person/lanegra.jpg" alt="profileImg">
        </div>
        <div class="name-job">
          <div class="profile_name">Trabajador</div>
          <div class="job">Administrador</div>
        </div>
        <i class='bx bx-log-out'></i>
      </li>
    </ul>
    </div>
    <!-- FIN MENÚ -->
    <section class="home-section">
        <div class="home-content">
          <i class='bx bx-menu'> <span class="text">Menú</span></i>
          <p class="welcome">Bienvenido Usuario#1</p>
        </div>
        <section id="Registrar-producto">
            <div class="menu-section">
              <span class="current-section">Registrar Producto</span>
            </div>
            <div class="Registrar-producto">
              <form action="" class="form" id="formulario" method="POST">
                <div class="form-content">
                  <!-- NOMBRE PRODUCTO -->
                  <div class="form-group" id="grupo__producto">
                    <input type="text" class="form-input" placeholder=" " name="Nom_producto">
                    <label for="" class="form-label" type="text">Nombre:</label>
                    <span class="form-line"></span>
                    <p class="formulario__input-error">El producto tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
                  </div>
                  <!-- CATEGORIAS -->
                  <div class="form-group">
                    <label for="" class="form-label categoria" type="text">Categoría:
                      <select id="categorias" class="form-select" name="Categoria">
                      <?php
        $datos = $pro -> get_categoria();
        for($i=0;$i<sizeof($datos);$i++){ ?>
                        <option value="<?php echo $datos [$i] ["id_categoria"];?>"><?php echo $datos [$i] ["nom_categoria"];?></option>
                        <?php } ?>
                      </select>
                    </label>
                    <span class="form-line"></span>
                  </div>
                  <!-- ESTADO -->
                  <div class="form-group estado">
                    <label for="" class="form-label" type="text">Estado:</label>
                    <label class="switch">
                        <input type="hidden" name="Estatus" value="0">
                        <input type="checkbox" name="Estatus" value="1" checked>
                        <span class="slider"></span>
                    </label>
                  </div>
                  <!-- CANTIDAD -->
                  <div class="form-group" id="grupo__cantidad">
                    <input type="text" class="form-input" placeholder=" " name='Cantidad' maxlength="2"/>
                    <label for="" class="form-label" type="number">Cantidad:</label>
                    <span class="form-line"></span>
                    <p class="formulario__input-error">Ingresar únicamente dígitos numéricos.</p>
                  </div>
                  <!-- PRECIO -->
                  <div class="form-group" id="grupo__precio">
                    <input type="text" class="form-input" placeholder=" " name="Precio" maxlength="4">
                    <label for="" class="form-label" type="text">Precio</label>
                    <span class="form-line"></span>
                    <p class="formulario__input-error">Ingresar únicamente dígitos numéricos.</p>
                  </div>
                  <!-- IMAGEN -->
                  <div class="form-group">
                    <input type="file" class="form-input" placeholder="" name="Imagen" >
                    <label for="" class="form-label" type="text">Imagen</label>
                    <span class="form-line"></span>
                  </div>
                  <input type="hidden" id="grabar" name="grabar" value="true">
                  <input type="submit" class="form-btn" value="Registrar Producto">
                </div>  
              </form>
            </div>
          </section>
    </section>
    <script src="../slide/menu.js"></script>   
    <script src="../slide/Form.js"></script>
</body>
</html>