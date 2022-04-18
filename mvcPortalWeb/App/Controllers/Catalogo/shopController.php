<?php
    require('../../Models/ProductModel.php');
    $pro = new productModel();
    $datos = $pro -> getShop();
    require('../../Models/ContactsModel.php');
    $con = new ContactsModel();
    $contactos = $con -> mostrarContactos();
    require('../../Views/Catalogo/shop.php');
?>