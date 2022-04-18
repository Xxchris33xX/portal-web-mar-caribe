<?php
    include_once ("../Models/UserModel.php");
    $pro = new UserModel();
    $pro -> eliminarUsuario($_GET["id"]);
?>