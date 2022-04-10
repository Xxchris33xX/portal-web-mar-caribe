<?php
  require('../../Models/UserModel.php');
  $user = new usuario();
  $datos = $user ->get_usuario();
  require('../../Models/ProductModel.php');
  $pro = new producto();
  $datos1 = $pro ->get_producto();
     
   require('../../Views/Sistema/dashboard.php');
?>