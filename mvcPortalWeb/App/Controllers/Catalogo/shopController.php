<?php
    require('../../Models/ProductModel.php');
    $pro = new productModel();
    $datos = $pro -> getProduct();
      
    require('../../Views/Catalogo/shop.php');
?>