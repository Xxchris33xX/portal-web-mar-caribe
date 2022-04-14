<?php
    require('../../Models/UserModel.php');
    $user = new UserModel();
    
        $datos = $user ->getUser();
        $rol = $user ->get_rol();
    require('../../Views/Sistema/con-user.php');
?>