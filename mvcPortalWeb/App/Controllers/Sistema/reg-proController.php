<?php
    require('../../Models/ProductModel.php');
    $pro = new ProductModel();
    $datos = $pro -> get_categoria();
    if(isset ($_POST["grabar"]) && $_POST["grabar"] == "true"){
        $pro -> create_ProductModel();
        exit;
    }
    require('../../Views/Sistema/reg-pro.php');
?>