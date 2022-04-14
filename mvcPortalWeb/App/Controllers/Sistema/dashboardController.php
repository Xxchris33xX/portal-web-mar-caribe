<?php
  require('../../Models/UserModel.php');
  $user = new UserModel();
  $datos = $user ->getUser();
  require('../../Models/ProductModel.php');
  $pro = new productModel();
  $datos1 = $pro ->getProduct();
     
   require('../../Views/Sistema/dashboard.php');
?>