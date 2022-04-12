<?php
    require('../../Models/ProductModel.php');
    $pro = new productModel();
    
        $datos = $pro ->getProduct();
        if(isset ($_POST["borrar"]) && $_POST["borrar"] == "true"){
          $pro -> delete_producto($_GET["id"]);
          exit;
      }
    require('../../Views/Sistema/con-pro.php');
?>