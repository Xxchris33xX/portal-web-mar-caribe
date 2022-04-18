<?php
    require('../../Models/ProductModel.php');
    $pro = new productModel();
    $datos = $pro -> getProduct_por_id($_GET["id"]);
    require('../../Models/ContactsModel.php');
    $con = new ContactsModel();
    $contactos = $con -> mostrarContactos();
    require('../../Views/Catalogo/product.php');
?>