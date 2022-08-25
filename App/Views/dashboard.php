<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="<?= PATH_ASSETS.'styles/Sistema/menu.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'styles/Sistema/dashboard.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/animations.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/boxicons.min.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'boxicons-2.1.1/css/transformations.css'?>" rel="stylesheet" type="text/css">
  <link href="<?= PATH_ASSETS.'bootstrap-4.0.0/dist/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css">
</head>

<body>
  <!-- Menú -->
  <?php require('partials/menu.php') ?>
  <!-- FIN MENÚ -->
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'> <span class="text">Menú</span></i>
      <p class="welcome">Bienvenido <?= $_SESSION['user']['nom_usuario'] ?></p>
    </div>
    <section id="dashboard">
      <div class="menu-section">
        <span class="current-section">Dashboard</span>
      </div>
      <div class="Dashboard">
        <div class="Sistema-Productos">
          <h3><?= $totalproducts['total'];?></h3>
          <i class='bx bx-basket'></i>
          <p class="text">Productos registrados</p>
          <a href="<?= FOLDER_PATH.'/con_pro'?>"> Más información </a>
        </div>
        <div class="Sistema-Visitas">
          <h3><?= $viewsAll;?></h3>
          <i class='bx bx-pointer'></i>
          <p class="text">Visitas totales al sitio</p>
        </div>
        <div class="Sistema-Visitas Totales">
          <h3><?= $views;?></h3>
          <i class='bx bx-show'></i>
          <p class="text">Visitas por usuario al sitio</p>
        </div>
        <div class="Sistema-Informacion">
          <span>Resumen de actividades</span>
          <i class='bx bxs-user-detail'></i>
          <p class="text-1">Último producto agregado: <?= $last['nom_producto'];?></p>
          <p class="text-2">Última entrada
            registrada:<?= " +" . $last2['cantidad_entrada'] . " " .$last2['nom_producto'];?></p>
          <p class="text-3">Última salida registrada:
            <?= " -" . $last3['cantidad_salida'] . " " . $last3['nom_producto'];?></p>
          <form class="form-infouser1" method="POST" action="<?= FOLDER_PATH.'/dashboard/grabar'?>">
            <span class="info-user1">Ubicación:</span>
            <input id="inputU" type="text" name="ubicacion" value="<?= $datos2 ["ubicacion"];?>" disabled>
            <input type="hidden" id="Mensaje" name="Mensaje" value="Se editaron los contactos">
            <input type="hidden" id="Entidad" name="Entidad" value="Ubicación">
            <button id="btnConfirm" class="btn btn-success d-none" name="grabar" id="grabar" value="ubicacion"  data-toggle="tooltip" data-placement="top" title="Confirmar">
              <i class='bx bx-check-circle'></i>
            </button>
            <i id="btnEditinfo" class='btn btn-primary bx bx-wrench' data-toggle="tooltip" data-placement="top"></i>
          </form>
          <form class="form-infouser1" method="POST" action="<?= FOLDER_PATH.'/dashboard/grabar'?>">
            <span class="info-user1">Teléfono:</span>
            <input id="inputT" type="text" name="telefono" value="<?= $datos2 ["telefono"];?>" disabled>
            <input type="hidden" id="Mensaje" name="Mensaje" value="Se editaron los contactos">
            <input type="hidden" id="Entidad" name="Entidad" value="Teléfono">
            <button id="btnConfirm2" class="btn btn-success d-none" name="grabar" id="grabar" value="telefono" data-toggle="tooltip" data-placement="top" title="Confirmar">
              <i class='bx bx-check-circle'></i>
            </button>
            <i id="btnEditinfo2" class='btn btn-primary bx bx-wrench' data-toggle="tooltip" data-placement="top"></i>
          </form>
        </div>
        <?php if($_SESSION['user']['rol_usuario'] == 1){ ?>
        <div class="Sistema-Usuarios">
          <h3><?= $totalusers['total'];?></h3>
          <i class='bx bx-user'></i>
          <p class="text">Usuarios registrados</p>
          <a href="<?= FOLDER_PATH.'/con_user'?>"> Más información </a>
        </div>
        <?php }?>
      </div>
    </section>
  </section>
  <script src="<?= PATH_ASSETS.'slide/menu.js'?>"></script>
  <script src="<?= PATH_ASSETS.'slide/jquery-3.6.0.min.js'?>"></script>
  <script src="<?= PATH_ASSETS.'popper/popper.min.js'?>"></script>
  <script src="<?= PATH_ASSETS.'bootstrap-4.0.0/dist/js/bootstrap.min.js'?>"></script>
  <script>
    $(function () {
      btnEditinfo.setAttribute('data-original-title','Editar Ubicación');
      btnEditinfo2.setAttribute('data-original-title','Editar Teléfonos');
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
  <script src="<?= PATH_ASSETS.'slide/infoUserEdit.js'?>"></script>
</body>

</html>