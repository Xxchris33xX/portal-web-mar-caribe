<?php
  require('../../Models/UserModel.php');
  $user = new UserModel();
  $datos = $user -> mostrarUsuario();
  for($i=0;$i<sizeof($datos);$i++);
  require('../../Models/ProductModel.php');
  $pro = new productModel();
  $datos1 = $pro -> mostrarProducto();
  $last = $pro -> getLastProduct();
  for($p=0;$p<sizeof($datos1);$p++);
  require('../../Models/ContactsModel.php');
  $tac = new ContactsModel();
  $datos2 = $tac -> mostrarContactos();
  if(isset ($_POST["grabar"])){
    switch($_POST["grabar"])
    {
      case 'telefono':
        $tac -> editarTelefono();
      break;
      case 'ubicacion':
        $tac -> editarUbicacion();
      break;
    }
    exit;
}
  session_start();
  print_r($_POST);
  if(empty($_SESSION["user"])) { 
    header('location:loginController.php'); }
   require('../../Views/Sistema/dashboard.php');
?>