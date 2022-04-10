<?php
    require('../../Models/UserModel.php');
    $user = new usuario();
    
        $datos = $user ->get_usuario();
        $rol = $user ->get_rol();
    require('../../Views/Sistema/con-user.php');
?>