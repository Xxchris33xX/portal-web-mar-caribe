<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODELS . 'ProductModel.php';
  session_start();
  if(empty($_SESSION["user"])) { 
    header('location:'. FOLDER_PATH .'/login'); }

    class con_proController extends Controller
    {
        
        private $model;
        public $datos;
        public function __construct()
        {
            
            $this -> model = new ProductModel();
            $this -> datos = $this -> model -> mostrarProducto();
            $this -> model -> cerrarConexion();

        }
    
        
        public function exec($param)
        {
            $this -> show();
        }
    
        public function show()
        {
            $params = array('datos' => $this -> datos);
            $this->render(__CLASS__, $params);
            //print_r($params);
        }

        public function JSON(){
            $this -> model = new ProductModel();
            $this -> datos = $this -> model -> mostrarProductoJSON();
            $this -> model -> cerrarConexion();
            die();
        }

        public function inactiveJSON(){
            $this -> model = new ProductModel();
            $this -> datos = $this -> model -> mostrarProductoInactivo();
            $this -> model -> cerrarConexion();
            die();
        }

        public function CategoriaJSON(){
            $this -> model1 = new ProductModel();
            $this -> cats = $this -> model1 -> mostrarCategoriaJSON();
            $this -> model -> cerrarConexion();
            die();
        }

        public function grabar()
        {
            $this -> model -> editarProducto();
            header('Location:'. FOLDER_PATH .'/con_pro/exec/?m=3');
            $this -> model -> cerrarConexion();
        }

        public function eliminar()
        {
            $this -> model -> eliminarProducto($_GET["id"]);
            header('Location:'. FOLDER_PATH .'/con_pro/exec/?m=4');
            $this -> model -> cerrarConexion();
        }
        public function activar()
        {
            $this -> model -> activarProducto($_GET["id"]);
            header('Location:'. FOLDER_PATH .'/con_pro/exec/?m=6');
            $this -> model -> cerrarConexion();
        }

        public function getProducts(){
            $htmlOptions = '';
            $this->model = new ProductModel();
            $arrayProducts = $this->model->mostrarProducto();
            foreach ($arrayProducts as $products){
              $htmlOptions .= '<option value="'.$products['id_producto'].'">'.$products['nom_producto'].'</option>';
            }
            echo $htmlOptions;
            die();
        }

    }



   /* require('../../Models/ProductModel.php');
    $pro = new productModel();
    $datos = $pro ->mostrarProducto();
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/con-pro.php');*/
?>