<?php
    require('../../Models/CategoryModel.php');
    require('../../Models/ProductModel.php');
    $cat = new CategoryModel();
    $datos = $cat -> mostrarCategoria();
    $pro = new ProductModel();
    if(isset ($_POST["grabar"]) && $_POST["grabar"] == "true"){
        $pro -> insertarProducto();
        exit;
    }
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/reg-pro.php');
?>