<?php
    require('../../Models/ProductModel.php');
    $pro = new producto();
    
        $datos = $pro ->get_producto();
        $categoria = $pro ->get_categoria();
        if(isset ($_POST["borrar"]) && $_POST["borrar"] == "true"){
          $pro -> delete_producto($_GET["id"]);
          exit;
      }
    require('../../Views/Sistema/con-pro.php');
?>