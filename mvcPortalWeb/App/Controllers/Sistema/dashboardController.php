<?php
  require('../../Models/UserModel.php');
  $user = new usuario();
  $datos = $user ->get_usuario();
  require('../../Models/ProductModel.php');
  $pro = new productModel();
  $datos1 = $pro ->getProduct();
     
   require('../../Views/Sistema/dashboard.php');
?>