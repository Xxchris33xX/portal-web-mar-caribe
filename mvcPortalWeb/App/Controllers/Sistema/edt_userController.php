<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODELS . 'UserModel.php';
  session_start();
  if(empty($_SESSION["user"])) { 
    header('location:login'); }

    class edt_userController extends Controller
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
            $this -> datos = $this -> model -> mostrarUsuarioPorId($_GET["id"]);

        }
    
        
        public function exec($param)
        {
            $this -> show();
        }
    
        public function show()
        {
            $params = array('datos' => $this -> datos, 'rol' => $this -> rol);
            $this->render($this -> carpeta,__CLASS__, $params);
            //print_r($params);
        }

        public function grabar()
        {
            $this -> model -> editarProducto();
        }
    }
    
    
    
    /*require('../../Models/UserModel.php');
    $pro = new UserModel();
    $rol = $pro -> get_rol();
    $datos = $pro -> getUser_por_id($_GET["id"]);
    if(isset ($_POST["grabar"]) && $_POST["grabar"] == "true"){
        $pro -> editUser();
        exit;
    }
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/edt-user.php');*/
?>