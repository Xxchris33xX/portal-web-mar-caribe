<?php
    require('../../Models/InventoryModel.php');
    $pro = new InventoryModel();
    $datos = $pro -> mostrarProducto();
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
    $entrada = $int -> mostrarEntrada();
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/con-int.php');

?>