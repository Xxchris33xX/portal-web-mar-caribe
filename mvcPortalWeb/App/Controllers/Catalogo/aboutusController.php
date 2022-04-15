<?php
    require('../../Models/ContactsModel.php');
    $con = new ContactsModel();
    $contactos = $con -> getContacts();
    require('../../Models/ProductModel.php');
    $pro = new productModel();
    $datos = $pro ->getProduct();
    require('../../Views/Catalogo/aboutus.php');
?>