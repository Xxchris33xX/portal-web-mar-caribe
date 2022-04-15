<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/menu.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/dashboard.css" rel="stylesheet" type="text/css">
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
    <!-- FIN MENÚ -->
    <section class="home-section">
        <div class="home-content">
          <i class='bx bx-menu'> <span class="text">Menú</span></i>
          <p class="welcome">Bienvenido Usuario#1</p>
        </div> 
        <section id="dashboard">
            <div class="menu-section">
                <span class="current-section">Dashboard</span>
            </div>
            <?php for($i=0;$i<sizeof($datos);$i++)?>
            <div class="Dashboard">
                <div class="Sistema-Usuarios">
                    <h3><?php echo ($i);?></h3>
                    <i class='bx bx-user'></i>
                    <p class="text">Usuarios registrados</p>
                    <a href="../../Controllers/Sistema/con-userController.php"> Más información </a>
                </div>
                <?php for($i1=0;$i1<sizeof($datos1);$i1++){ $i1; } ?>
                <div class="Sistema-Productos"> 
                    <h3><?php echo ($i1);?></h3>
                    <i class='bx bx-basket'></i>
                    <p class="text">Productos registrados</p>
                    <a href="../../Controllers/Sistema/con-proController.php"> Más información </a>
                </div>
                <div class="Sistema-Visitas">
                    <h3>44</h3>
                    <i class='bx bx-pointer'></i>
                    <p class="text">Visitas al sitio</p>
                </div>
                <div class="Sistema-ofertas">
                    <h3>44</h3>
                    <i class='bx bx-purchase-tag' ></i>
                    <p class="text">Ofertas activas</p>
                    <a href="#"> Más información </a>
                </div>
                <div class="Sistema-Informacion">
                    <span>Resumen de actividades</span>
                    <i class='bx bxs-user-detail'></i>
                    <p class="text-1">Último producto agregado</p>
                    <p class="text-2">Última conexión</p>
                    <p class="text-3">Última salida registrada</p>
                </div>
            </div>
      </section>
    </section> 
  <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/menu.js"></script>    
</body>
</html>