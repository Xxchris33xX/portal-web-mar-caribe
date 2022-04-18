<?php
    require('../../Models/UserModel.php');
    $user = new UserModel();
    
        $datos = $user ->mostrarUsuario();
        $rol = $user ->get_rol();
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/con-user.php');
?>