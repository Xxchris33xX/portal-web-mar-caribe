<?php
    require('../../Models/UserModel.php');
    $user = new UserModel();
    if(isset ($_POST["grabar"]) && $_POST["grabar"] == "true"){
        $user -> create_UserModel();
        exit;
    }
    require('../../Views/Sistema/reg-user.php');
?>