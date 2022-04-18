<?php
    include_once ("../Models/ProductModel.php");
    $pro = new ProductModel();
    $pro -> eliminarProducto($_GET["id"]);
?>