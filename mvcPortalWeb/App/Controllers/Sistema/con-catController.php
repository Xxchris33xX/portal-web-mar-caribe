<?php
    session_start();
    print_r($_POST);
    $id_usuario = $_SESSION["user"]["id_usuario"];
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Models/CategoryModel.php');
    $cat = new CategoryModel();
    $datos = $cat -> mostrarCategoria();
    if(isset ($_POST["grabar"]) && $_POST["grabar"] == "true"){
        $cat -> insertarCategoria($id_usuario);
        exit;
    }
    if(isset ($_POST["editar"]) && $_POST["editar"] == "true"){
        $cat -> editarCategoria();
        exit;
    }
    require('../../Views/Sistema/con-cat.php');
?>