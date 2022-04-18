<?php
    require('../../Models/ProductModel.php');
    require('../../Models/CategoryModel.php');
    $cat = new CategoryModel();
    $cats = $cat -> mostrarCategoria();
    $pro = new ProductModel();
    $datos = $pro -> getProduct_por_id($_GET["id"]);
    if(isset ($_POST["grabar"]) && $_POST["grabar"] == "true"){
        $pro -> editarProducto();
        exit;
    }
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/edt-pro.php');
?>