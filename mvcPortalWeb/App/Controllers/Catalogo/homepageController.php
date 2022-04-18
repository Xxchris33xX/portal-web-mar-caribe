<?php
    require('../../Models/ContactsModel.php');
    $con = new ContactsModel();
    $contactos = $con -> mostrarContactos();
    //print_r($contactos);
    require('../../Views/Catalogo/homepage.php');
?>