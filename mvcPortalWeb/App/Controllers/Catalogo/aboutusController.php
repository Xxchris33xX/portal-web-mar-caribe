<?php
    require('../../Models/ContactsModel.php');
    $con = new ContactsModel();
    $contactos = $con -> mostrarContactos();
    require('../../Models/ProductModel.php');
    $pro = new productModel();
    $datos = $pro ->mostrarProducto();
    require('../../Views/Catalogo/aboutus.php');
?>