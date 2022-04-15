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
        <?php if($_SESSION['user']['priv'] == 1){ ?>
          <li>
            <div class="iocn-link">
              <a href="../../Controllers/Sistema/../../Controllers/Sistema/con-userController.php">
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
        <?php } ?>
        <li>
        <div class="profile-details">
          <div class="profile-content">
            <?php if($_SESSION['user']['priv'] == 1){?>
            <img src="../../Helpers/img/User/admin.jpg" alt="profileImg">
            <?php }?>
            <?php if($_SESSION['user']['priv'] == 2){?>
            <img src="../../Helpers/img/User/operator.jpg" alt="profileImg">
            <?php }?>
          </div>
          <div class="name-job">
            <div class="profile_name">Trabajador</div>
            <div class="job"><?php echo $_SESSION['user']['priv'] == 1 ? 'Administrador':'Operador'; ?></div>
          </div>
           <a class="btn-exit" href="../../Controllers/Sistema/closeSesion.php">
            <i class='bx bx-log-out'></i>
           </a>
        </li>
      </ul>
    </div>