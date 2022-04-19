<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODELS . 'UserModel.php';
  session_start();
  if(empty($_SESSION["user"])) { 
    header('location:login'); }

    class con_userController extends Controller
    {
        private $carpeta;
        private $model;

        public $datos;
        public $rol;
        public function __construct($carpeta)
        {
            $this -> carpeta = $carpeta;
            $this -> model = new UserModel();
            $this -> rol = $this -> model -> mostrarRol();
            $this -> datos = $this -> model -> mostrarUsuario();
        }
    
        
        public function exec($param)
        {
            $this -> show();
        }
    
        public function show()
        {
            $params = array('datos' => $this -> datos,'rol' => $this -> rol);
            $this->render($this -> carpeta,__CLASS__, $params);
            //print_r($params);
        }

        public function eliminar()
        {
            $this -> model -> eliminarUsuario($_GET["id"]);
        }
    }

    /*require('../../Models/UserModel.php');
    $user = new UserModel();
    
        $datos = $user ->mostrarUsuario();
        $rol = $user ->get_rol();
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/con-user.php');*/
?>