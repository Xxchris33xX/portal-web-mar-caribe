<?php
    require('../../Models/ProductModel.php');
    $pro = new productModel();
    $datos = $pro -> get_producto_por_id($_GET["id"]);
    require('../../Models/ContactsModel.php');
    $con = new ContactsModel();
    $contactos = $con -> getContacts();
    require('../../Views/Catalogo/product.php');
?>