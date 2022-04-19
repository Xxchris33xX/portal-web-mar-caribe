<div class="sidebar">
        <div class="logo-details">
          <i class='bx bx-grid-alt' ></i>
          <span class="logo_name">MarCaribe C.</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="<?php echo FOLDER_PATH.'/sistema/dashboard'?>">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="link_name">Dashboard</span>
                </a>
            </li>
            <li>
              <div class="iocn-link">
                <a href="<?php echo FOLDER_PATH.'/sistema/con_pro'?>">
                    <i class='bx bx-basket'></i>
                    <span class="link_name">Consultar Productos</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
              </div>
              <ul class="sub-menu">
                <li><a class="link_name" href="<?php echo FOLDER_PATH.'/sistema/con_pro'?>">Consultar Productos</a></li>
                <li><a href="<?php echo FOLDER_PATH.'/sistema/reg_pro'?>">Agregar Producto</a></li>
                <li><a href="<?php echo FOLDER_PATH.'/sistema/con_int'?>">Consultar Entrada</a></li>
                <li><a href="<?php echo FOLDER_PATH.'/sistema/con_out'?>">Consultar Salida</a></li>
                <li><a href="<?php echo FOLDER_PATH.'/sistema/con_ofer'?>">Agregar Promoción</a></li>
                <li><a href="<?php echo FOLDER_PATH.'/sistema/con_cat'?>">Consultar Categorias</a></li>
              </ul>
            </li>
            
        <?php if($_SESSION['user']['rol_usuario'] == 1){ ?>
          <li>
            <div class="iocn-link">
              <a href="<?php echo FOLDER_PATH.'/sistema/con_user'?>">
                <i class='bx bx-user' ></i>
                <span class="link_name">Consultar Usuarios</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="<?php echo FOLDER_PATH.'/sistema/con_user'?>">Consultar Usuarios</a></li>
                <li><a href="<?php echo FOLDER_PATH.'/sistema/reg_user'?>">Agregar Usuario</a></li>
            </ul>
          </li>
        <?php } ?>
        <li>
        <div class="profile-details">
          <div class="profile-content">
            <?php if($_SESSION['user']['rol_usuario'] == 1){?>
            <img src="<?php echo PATH_ASSETS.'img/User/admin.jpg'?>" alt="profileImg">
            <?php }?>
            <?php if($_SESSION['user']['rol_usuario'] == 2){?>
            <img src="<?php echo PATH_ASSETS.'img/User/operator.jpg'?>" alt="profileImg">
            <?php }?>
          </div>
          <div class="name-job">
            <div class="profile_name">Trabajador</div>
            <div class="job"><?php echo $_SESSION['user']['rol_usuario'] == 1 ? 'Administrador':'Operador'; ?></div>
          </div>
           <a class="btn-exit" href="<?php echo FOLDER_PATH.'/sistema/login/closeSession'?>">
            <i class='bx bx-log-out'></i>
           </a>
        </li>
      </ul>
    </div>