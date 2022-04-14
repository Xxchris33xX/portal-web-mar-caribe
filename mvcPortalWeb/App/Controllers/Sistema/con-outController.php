<?php
    require('../../Models/InventoryModel.php');
    $pro = new InventoryModel();
    $datos = $pro -> getProduct();
    if(isset ($_POST["salida"]) && $_POST["salida"] == "true"){
        $valor1 = $pro -> cantidad($_POST["id"]);
        $result   = $pro -> salida($valor1['cantidad']);
        $pro -> editInventory($result);
        header("location: con-outController.php?m=2");
        exit;
    }
    $out = new InventoryModel();
    $salida = $out -> getSalida();
    require('../../Views/Sistema/con-out.php');
?>