<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODELS . 'ProductModel.php';
require_once ROOT . PATH_MODELS . 'CategoryModel.php';
  session_start();
  if(empty($_SESSION["user"])) { 
    header('location:'. FOLDER_PATH .'/login'); }

    class reg_proController extends Controller
    {
        
        private $model;
        private $model1;
        public $datos;
        public $cat;
        public function __construct()
        {
            $this -> model = new ProductModel();
            $this -> model -> cerrarConexion();

            $this -> model1 = new CategoryModel();
            $this -> cat = $this -> model1 -> mostrarCategoria();
            $this -> model -> cerrarConexion();

        }
    
        public function grabar()
        {
            
            $this -> model -> insertarProducto();
            $this -> model -> cerrarConexion();
            header('Location:'. FOLDER_PATH .'/con_pro/exec/?m=2');

        }

        public function exec($param)
        {
            $this -> show();
        }
    
        public function show()
        {
            $params = array('datos' => $this -> cat);
            $this->render(__CLASS__, $params);
            //print_r($params);
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