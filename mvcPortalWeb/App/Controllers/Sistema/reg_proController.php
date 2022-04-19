<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODELS . 'ProductModel.php';
require_once ROOT . PATH_MODELS . 'CategoryModel.php';
  session_start();
  if(empty($_SESSION["user"])) { 
    header('location:login'); }

    class reg_proController extends Controller
    {
        private $carpeta;
        private $model;
        private $model1;
        public $datos;
        public $cat;
        public function __construct($carpeta)
        {
            $this -> carpeta = $carpeta;
            $this -> model = new ProductModel();

            $this -> model1 = new CategoryModel();
            $this -> cat = $this -> model1 -> mostrarCategoria();
        }
    
        
        public function exec($param)
        {
            $this -> show();
        }
    
        public function show()
        {
            $params = array('datos' => $this -> cat);
            $this->render($this -> carpeta,__CLASS__, $params);
            //print_r($params);
        }

        public function grabar()
        {
            $this -> model -> insertarProducto();
        }
    }



/*    require('../../Models/CategoryModel.php');
    require('../../Models/ProductModel.php');
    $cat = new CategoryModel();
    $datos = $cat -> mostrarCategoria();
    $pro = new ProductModel();
    if(isset ($_POST["grabar"]) && $_POST["grabar"] == "true"){
        $pro -> insertarProducto();
        exit;
    }
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/reg-pro.php'); */
?>