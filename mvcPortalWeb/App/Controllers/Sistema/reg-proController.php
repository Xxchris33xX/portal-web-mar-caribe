<?php
    require('../../Models/ProductModel.php');
    $pro = new producto();
    if(isset ($_POST["grabar"]) && $_POST["grabar"] == "true"){
        $pro -> create_producto();
        exit;
    }
    require('../../Views/Sistema/reg-pro.php');
?>