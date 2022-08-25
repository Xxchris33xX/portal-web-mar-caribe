<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODELS . 'InventoryModel.php';
  session_start();
  if(empty($_SESSION["user"])) { 
    header('location:'. FOLDER_PATH .'/login'); }

    class con_outController extends Controller
    {
        
        private $model;
        private $model1;
        public $datos;
        public $valor1;
        public $result;
        public function __construct()
        {
            
            $this -> model = new InventoryModel();
            $this -> datos = $this -> model -> mostrarProducto();
            $this -> model -> cerrarConexion();
           /* $this -> model1 = new InventoryModel();
            $this -> salida = $this -> model1 -> mostrarSalida();
            $this -> model -> cerrarConexion();*/

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
            $this -> model1 = new InventoryModel();
            $this -> salida = $this -> model1 -> mostrarSalidaJSON();
            $this -> model -> cerrarConexion();
            die();
        }

        public function grabar()
        {
            foreach($_POST['cantidad'] as $cantidad)
            {
                if(empty($cantidad) || $cantidad < 0){
                    $arrResponse = array('status'=> false ,'msg'=>'Rellené los campos de cantidad adecuadamente');
                    echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
                    exit;
                }
            }

            for($i = 0;$i < count($_POST['idProducto']);$i++){
                $this -> valor1 = $this -> model -> cantidad($_POST["idProducto"][$i]);
                if(($this->valor1['cantidad'] - $_POST["cantidad"][$i]) < 0){
                    $arrResponse = array('status'=> false ,'msg'=>"El Producto {$_POST['nombre'][$i]} tiene una cantidad de {$this->valor1['cantidad']} y se está intentando retirar la cantidad de {$_POST['cantidad'][$i]}");
                    echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
                    exit;
                }
            }

            for($i = 0;$i < count($_POST['idProducto']);$i++){
                $this -> valor1 = $this -> model -> cantidad($_POST["idProducto"][$i]);
                $this -> result = $this -> model -> salida($this->valor1['cantidad'],$i);
                $this -> model -> editInventory($this -> result, $i);
            }  
            
            $arrResponse = array('status'=> true ,'msg'=>'La salida de productos se realizó con éxito');
            echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
            $this -> model -> cerrarConexion();
        }
    }
   
   /* require('../../Models/InventoryModel.php');
    $pro = new InventoryModel();
    $datos = $pro -> mostrarProducto();
    if(isset ($_POST["salida"]) && $_POST["salida"] == "true"){
        $valor1 = $pro -> cantidad($_POST["id"]);
        $result   = $pro -> salida($valor1['cantidad']);
        $pro -> editInventory($result);
        header("location: con-outController.php?m=2");
        exit;
    }
    $out = new InventoryModel();
    $salida = $out -> mostrarSalida();
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/con-out.php'); */
?>