<?php 
    include __DIR__ . '/../Models/Model.php';
    require_once(__DIR__ . '/../Models/User_Model.php');

    class userController
    {
        public static function login($username,$password)
        {
            $obj_user= new User();
            $obj_user->setusername($username);
            $obj_user->setPassword($password);

            return usuarioDao::login($obj_user);
        }

        public function getUser($username,$password){
            $obj_user= new User();
            $obj_user->setusername($username);
            $obj_user->setPassword($password);

            return usuarioDao::getUser($obj_user);
        }
    }

?>