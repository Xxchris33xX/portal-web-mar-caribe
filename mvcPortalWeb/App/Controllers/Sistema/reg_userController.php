<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODELS . 'UserModel.php';
  session_start();
  if(empty($_SESSION["user"])) { 
    header('location:login'); }

    class reg_userController extends Controller
    {
        private $carpeta;
        private $model;
        public $datos;
        public function __construct($carpeta)
        {
            $this -> carpeta = $carpeta;
            $this -> model = new UserModel();
            $this -> datos = $this -> model -> mostrarRol();
        }
        
        public function exec($param)
        {
            $this -> show();
        }
    
        public function show()
        {
            $params = array('datos' => $this -> datos);
            $this->render($this -> carpeta,__CLASS__, $params);
            //print_r($params);
        }

        public function grabar()
        {
            $this -> model -> insertarUsuario();
        }
    }
   
   
   /* require('../../Models/UserModel.php');
    $user = new UserModel();
    if(isset ($_POST["grabar"]) && $_POST["grabar"] == "true"){
        $user -> insertarUsuario();
        exit;
    }
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/reg-user.php');*/
?>