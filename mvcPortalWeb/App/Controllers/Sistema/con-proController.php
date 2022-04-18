<?php
    require('../../Models/ProductModel.php');
    $pro = new productModel();
    $datos = $pro ->mostrarProducto();
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/con-pro.php');
?>