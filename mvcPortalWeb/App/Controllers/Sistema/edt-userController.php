<?php
    require('../../Models/UserModel.php');
    $pro = new UserModel();
    $rol = $pro -> get_rol();
    $datos = $pro -> getUser_por_id($_GET["id"]);
    if(isset ($_POST["grabar"]) && $_POST["grabar"] == "true"){
        $pro -> editUser();
        exit;
    }
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/edt-user.php');
?>