<?php
    require('../../Models/InventoryModel.php');
    $pro = new InventoryModel();
    $datos = $pro -> getProduct();
    if(isset ($_POST["entrada"]) && $_POST["entrada"] == "true"){
        $valor1 = $pro -> cantidad($_POST["id"]);
        $result   = $pro -> entrada($valor1['cantidad']);
        if ($result < 0)
        {
            header("location: con-intController.php?m=3");
            exit;
        }
        else
        $pro -> editInventory($result);
        header("location: con-intController.php?m=2");
        exit;
    }
    $int = new InventoryModel();
    $entrada = $int -> getEntrada();
    require('../../Views/Sistema/con-int.php');
?>