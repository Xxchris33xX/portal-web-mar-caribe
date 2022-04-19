<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="<?php echo PATH_ASSETS.'styles/Sistema/menu.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo PATH_ASSETS.'styles/Sistema/dashboard.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo PATH_ASSETS.'boxicons-2.1.1/css/animations.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo PATH_ASSETS.'boxicons-2.1.1/css/boxicons.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo PATH_ASSETS.'boxicons-2.1.1/css/boxicons.min.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo PATH_ASSETS.'boxicons-2.1.1/css/transformations.css'?>" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- Menú -->
    <?php require('partials/menu.php') ?>
    <!-- FIN MENÚ -->
    <section class="home-section">
        <div class="home-content">
          <i class='bx bx-menu'> <span class="text">Menú</span></i>
          <p class="welcome">Bienvenido <?php echo $_SESSION['user']['nom_usuario'] ?></p>
        </div> 
        <section id="dashboard">
            <div class="menu-section">
                <span class="current-section">Dashboard</span>
            </div>
            <div class="Dashboard">
                <div class="Sistema-Productos">
                <?php for($p=0;$p<sizeof($datos1);$p++){ $p; } ?>
                    <h3><?php echo $p;?></h3>
                    <i class='bx bx-basket'></i>
                    <p class="text">Productos registrados</p>
                    <a href="<?php echo FOLDER_PATH.'/sistema/con_pro'?>"> Más información </a>
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
                    <a href="<?php echo FOLDER_PATH.'/sistema/con-ofer'?>"> Más información </a>
                </div>
                <div class="Sistema-Informacion">
                    <span>Resumen de actividades</span>
                    <i class='bx bxs-user-detail'></i>
                    <p class="text-1">Último producto agregado: <?php echo $last['nombre'];?></p>
                    <p class="text-2">Última conexión</p>
                    <p class="text-3">Última salida registrada</p>

                    <form class="form-infouser1" method="POST" action="<?php echo FOLDER_PATH.'/sistema/dashboard/grabar'?>">
                      <span class="info-user1">Ubicación:</span>
                      <input id="inputU" type="text" name="ubicacion" value="<?php echo $datos2 ["ubicacion_tienda"];?>" disabled>
                      <button id="btnConfirm" class="button-confirm" name="grabar" id="grabar" value="ubicacion" ><i class='bx bx-check-circle'></i></button>
                      <i id="btnEditinfo" class='bx bx-edit-alt'></i>
                    </form>
                    <form class="form-infouser1" method="POST" action="<?php echo FOLDER_PATH.'/sistema/dashboard/grabar'?>">
                      <span class="info-user1">Teléfono:</span>
                      <input id="inputT" type="text" name="telefono" value="<?php echo $datos2 ["telefono_tienda"];?>" disabled>
                      <button  class="button-confirm2" name="grabar" id="grabar" value="telefono"><i class='bx bx-check-circle'></i></button>
                      <i id="btnEditinfo2" class='bx bx-edit-alt'></i>
                    </form>
                </div>
              <?php if($_SESSION['user']['rol_usuario'] == 1){ ?>
                <div class="Sistema-Usuarios">
                <?php for($i=0;$i<sizeof($datos);$i++){ $i; } ?>
                    <h3><?php echo $i;?></h3>
                    <i class='bx bx-user'></i>
                    <p class="text">Usuarios registrados</p>
                    <a href="<?php echo FOLDER_PATH.'/sistema/con_user'?>"> Más información </a>
                </div>
             <?php }?>
            </div>
      </section>
    </section> 
  <script src="<?php echo PATH_ASSETS.'slide/menu.js'?>"></script>  
  <script src="<?php echo PATH_ASSETS.'slide/infoUserEdit.js'?>"></script>      
</body>
</html>
