<?php
    require('../../Models/ProductModel.php');
    $pro = new producto();
        $datos = $pro ->get_producto();
    require('../../Views/Sistema/con-int.php');
?>