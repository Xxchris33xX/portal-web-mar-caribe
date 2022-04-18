<?php
    //require('../../Models/UserModel.php');
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/con-ofer.php');
?>