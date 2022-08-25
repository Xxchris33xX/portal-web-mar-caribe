<div class="sidebar">
        <div class="logo-details">
          <i class='bx bx-grid-alt' ></i>
          <span class="logo_name">MarCaribe C.</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="<?= FOLDER_PATH.'/dashboard'?>">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="link_name">Dashboard</span>
                </a>
            </li>
            <li>
              <div class="iocn-link">
                <a href="<?= FOLDER_PATH.'/con_pro'?>">
                    <i class='bx bx-basket'></i>
                    <span class="link_name">Gestionar Productos</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
              </div>
              <ul class="sub-menu">
                <li><a class="link_name" href="<?= FOLDER_PATH.'/con_pro'?>">Consultar Productos</a></li>
                <li><a href="<?= FOLDER_PATH.'/reg_pro'?>">Agregar Producto</a></li>
                <li><a href="<?= FOLDER_PATH.'/con_int'?>">Consultar Entrada</a></li>
                <li><a href="<?= FOLDER_PATH.'/con_out'?>">Consultar Salida</a></li>
                <li><a href="<?= FOLDER_PATH.'/con_cat'?>">Consultar Categorias</a></li>
              </ul>
            </li>

        <?php if($_SESSION['user']['rol_usuario'] == 1){ ?>
          <li>
            <div class="iocn-link">
              <a href="<?= FOLDER_PATH.'/con_user'?>">
                <i class='bx bx-user' ></i>
                <span class="link_name">Gestionar Usuarios</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="<?= FOLDER_PATH.'/con_user'?>">Consultar Usuarios</a></li>
                <li><a href="<?= FOLDER_PATH.'/reg_user'?>">Agregar Usuario</a></li>
            </ul>
          </li>
          <li>
            <div class="iocn-link">
              <a href="<?= FOLDER_PATH.'/con_log_all'?>">
                <i class='bx bx-table' ></i>
                <span class="link_name">Consultar Historial</span>
              </a>
            </div>
          </li>
          <li>
            <div class="iocn-link">
              <a href="<?= FOLDER_PATH.'/con_ses'?>">
                <i class='bx bxs-user-detail' ></i>
                <span class="link_name">Consultar Sesiones</span>
              </a>
            </div>
          </li>
        <?php } ?>
        <li>
            <div class="iocn-link">
              <a href="<?= FOLDER_PATH.'/shop'?>" target="_BLANK">
                <i class='bx bx-store-alt'></i>
                <span class="link_name">Ver Catálogo</span>
              </a>
            </div>
          </li>
        <li>
          <div class="iocn-link manual responsive">
            <a href="<?= PATH_ASSETS.'/Manual/Manual de usuario.pdf';?>" download="<?= PATH_ASSETS.'/Manual/Manual de usuario.pdf';?>">
              <i class='bx bxs-file-pdf'></i>
              <span class="link_name">Manual de Usuario</span>
            </a>
          </div>
        </li>
        <li>
          <div class="iocn-link log-edit responsive">
            <a href="<?= FOLDER_PATH.'/log_edit/exec/?id='. $_SESSION['user']['id_usuario'];?>">
              <i class='bx bxs-user-detail'></i>
              <span class="link_name">Editar Perfil</span>
            </a>
          </div>
        </li>
        <li>
        <div class="profile-details">
          <div class="profile-content">
            <?php if($_SESSION['user']['rol_usuario'] == 1){?>
            <img src="<?= PATH_ASSETS.'img/User/admin.jpg'?>" alt="profileImg">
            <?php }?>
            <?php if($_SESSION['user']['rol_usuario'] == 2){?>
            <img src="<?= PATH_ASSETS.'img/User/operator.jpg'?>" alt="profileImg">
            <?php }?>
          </div>
          <div class="name-job">
            <div class="profile_name"><?= $_SESSION['user']['nom_usuario'] ?></div>
            <div class="job"><?= $_SESSION['user']['rol_usuario'] == 1 ? 'Administrador':'Operador'; ?></div>
          </div>
           <a class="btn-exit" href="<?= FOLDER_PATH.'/dashboard/closeSession'?>">
            <i class='bx bx-log-out'></i>
           </a>
        </div>
        </li>
      </ul>
    </div>