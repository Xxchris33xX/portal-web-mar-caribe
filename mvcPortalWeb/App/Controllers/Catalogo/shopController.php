<?php
    require('../../Models/ProductModel.php');
    $pro = new productModel();
    $datos = $pro -> getProduct();
    require('../../Models/ContactsModel.php');
    $con = new ContactsModel();
    $contactos = $con -> getContacts();
    require('../../Views/Catalogo/shop.php');
?>