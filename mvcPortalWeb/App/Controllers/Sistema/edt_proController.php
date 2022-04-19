<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODELS . 'ProductModel.php';
require_once ROOT . PATH_MODELS . 'CategoryModel.php';
  session_start();
  if(empty($_SESSION["user"])) { 
    header('location:login'); }

    class edt_proController extends Controller
    {
        private $carpeta;
        private $model;
        private $model1;
        public $datos;
        public $cats;
        public function __construct($carpeta)
        {
            $this -> carpeta = $carpeta;
            $this -> model = new ProductModel();
            $this -> datos = $this -> model -> mostrarProductoPorId($_GET["id"]);

            $this -> model1 = new CategoryModel();
            $this -> cats = $this -> model1 -> mostrarCategoria();
        }
    
        
        public function exec($param)
        {
            $this -> show();
        }
    
        public function show()
        {
            $params = array('datos' => $this -> datos, 'cats' => $this -> cats);
            $this->render($this -> carpeta,__CLASS__, $params);
            //print_r($params);
        }

        public function grabar()
        {
            $this -> model -> editarProducto();
        }
    }


/*    require('../../Models/ProductModel.php');
    require('../../Models/CategoryModel.php');
    $cat = new CategoryModel();
    $cats = $cat -> mostrarCategoria();
    $pro = new ProductModel();
    $datos = $pro -> getProduct_por_id($_GET["id"]);
    if(isset ($_POST["grabar"]) && $_POST["grabar"] == "true"){
        $pro -> editarProducto();
        exit;
    }
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/edt-pro.php');*/
?>