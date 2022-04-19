<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODELS . 'ProductModel.php';
  session_start();
  if(empty($_SESSION["user"])) { 
    header('location:login'); }

    class con_oferController extends Controller
    {
        private $carpeta;
        private $model;
        public $datos;
        public function __construct($carpeta)
        {
            $this -> carpeta = $carpeta;
            $this -> model = new ProductModel();
            $this -> datos = $this -> model -> mostrarProducto();
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
    }

   /* //require('../../Models/UserModel.php');
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/con-ofer.php'); */
?>