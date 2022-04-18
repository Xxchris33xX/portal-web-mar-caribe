<?php
    require('../../Models/LogModel.php');
    $log = new LogModel();
    $datos = $log -> getLog();
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/con-log.php');
?>