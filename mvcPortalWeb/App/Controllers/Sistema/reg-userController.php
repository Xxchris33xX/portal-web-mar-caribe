<?php
    require('../../Models/UserModel.php');
    $user = new UserModel();
    if(isset ($_POST["grabar"]) && $_POST["grabar"] == "true"){
        $user -> insertarUsuario();
        exit;
    }
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/reg-user.php');
?>