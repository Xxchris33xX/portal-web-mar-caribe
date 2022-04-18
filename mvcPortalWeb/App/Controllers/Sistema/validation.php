<?php

    include '../../Controllers/UserController.php';
    include '../../Helpers/login/login.php';
    session_start();
    header('Content-type: application/json');
    $result = array();

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {

        if(isset($_POST['Nom_usuario'])&&isset($_POST['Contrasenia']))
        {
            $username = validate($_POST['Nom_usuario']);
            $password = validate($_POST['Contrasenia']);
            $result = array("estado" => true);
            if(userController::login($username,$password))
            {
                $user = userController::getUser($username,$password);
                $_SESSION["user"] = array(
                    "id_usuario"=>$user->getId(),
                    "nom_usuario"=>$user->getusername(),
                    "rol_usuario"=>$user->getPrivilegio()
                );
                
            }  
                return print(json_encode($result));
                
        }
            $result = array("estado" => false);
            return print(json_encode($result));
        
    }
?>