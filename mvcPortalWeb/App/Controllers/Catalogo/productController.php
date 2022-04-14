<?php
    require('../../Models/ProductModel.php');
    $pro = new productModel();
    $datos = $pro -> get_producto_por_id($_GET["id"]);
    require('../../Views/Catalogo/product.php');
?>