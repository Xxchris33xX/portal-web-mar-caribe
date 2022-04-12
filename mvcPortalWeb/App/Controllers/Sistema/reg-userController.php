<?php
    require('../../Models/UserModel.php');
    $user = new usuario();
    if(isset ($_POST["grabar"]) && $_POST["grabar"] == "true"){
        $user -> create_usuario();
        exit;
    }
    require('../../Views/Sistema/reg-user.php');
?>