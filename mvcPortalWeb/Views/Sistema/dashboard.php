<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="../../Helpers/styles/Sistema/menu.css" rel="stylesheet" type="text/css">
    <link href="../../Helpers/styles/Sistema/dashboard.css" rel="stylesheet" type="text/css">
    <link href="../../Helpers/boxicons-2.1.1/css/animations.css" rel="stylesheet" type="text/css">
    <link href="../../Helpers/boxicons-2.1.1/css/boxicons.css" rel="stylesheet" type="text/css">
    <link href="../../Helpers/boxicons-2.1.1/css/boxicons.min.css" rel="stylesheet" type="text/css">
    <link href="../../Helpers/boxicons-2.1.1/css/transformations.css" rel="stylesheet" type="text/css">
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
                <a href="dashboard.php">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="link_name">Dashboard</span>
                </a>
            </li>
            <li>
              <div class="iocn-link">
                <a href="con-pro.php">
                    <i class='bx bx-basket'></i>
                    <span class="link_name">Consultar Productos</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
              </div>
              <ul class="sub-menu">
                <li><a class="link_name" href="con-pro.php">Consultar Productos</a></li>
                <li><a href="reg-pro.php">Agregar Producto</a></li>
                <li><a href="con-int.php">Consultar Entrada</a></li>
                <li><a href="con-out.php">Consultar Salida</a></li>
                <li><a href="con-ofer.php">Agregar Promoción</a></li>
              </ul>
            </li>
          <li>
            <div class="iocn-link">
              <a href="con-user.php">
                <i class='bx bx-user' ></i>
                <span class="link_name">Consultar Usuarios</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="con-user.php">Consultar Usuarios</a></li>
                <li><a href="reg-user.php">Agregar Usuario</a></li>
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
        <section id="dashboard">
            <div class="menu-section">
                <span class="current-section">Dashboard</span>
            </div>
            <div class="Dashboard">
                <div class="Sistema-Usuarios">
                    <h3>44</h3>
                    <i class='bx bx-user'></i>
                    <p class="text">Usuarios registrados</p>
                    <a href="con-user.php"> Más información </a>
                </div>
                <div class="Sistema-Productos">
                    <h3>44</h3>
                    <i class='bx bx-basket'></i>
                    <p class="text">Productos registrados</p>
                    <a href="con-pro.php"> Más información </a>
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
  <script src="../slide/menu.js"></script>    
</body>
</html>