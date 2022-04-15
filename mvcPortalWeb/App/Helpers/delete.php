<?php
    include_once ("../Models/ProductModel.php");
    $pro = new ProductModel();
    $pro -> delete_producto($_GET["id"]);
?>