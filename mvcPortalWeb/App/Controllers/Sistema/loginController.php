<?php

    include '../UserController.php';
    session_start();
    if(isset($_SESSION["user"]))
    {
        header('location: dashboardController.php');
    }
    require('../../Views/Sistema/login.php');
?>