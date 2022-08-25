<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODELS . 'InventoryModel.php';
  session_start();
  if(empty($_SESSION["user"])) { 
    header('location:'. FOLDER_PATH .'/login'); }

    class con_intController extends Controller
    {
        
        private $model;
        private $model1;
        public $datos;
        public $entrada;
        public $valor1;
        public $result;
        public function __construct()
        {
            
            $this -> model = new InventoryModel();
            $this -> datos = $this -> model -> mostrarProducto();
            $this -> model -> cerrarConexion();            
        }
    
        
        public function exec($param)
        {
            $this -> show();
        }
    
        public function JSON()
        {
            $this -> model1 = new InventoryModel();
            $this -> entrada = $this -> model1 -> mostrarEntradaJSON();
            $this -> model -> cerrarConexion();

        }

        public function show()
        {
            $params = array('datos' => $this -> datos,'entrada' => $this -> entrada);
            $this->render(__CLASS__, $params);
            //print_r($params);
        }

        public function grabar()
        {   
            foreach($_POST['cantidad'] as $cantidad){
                if(empty($cantidad) || $cantidad < 0){
                    $arrResponse = array('status'=> false ,'msg'=>'Rellené los campos de cantidad adecuadamente');
                    echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
                    exit;
                }
            }

            for($i = 0;$i < count($_POST['idProducto']);$i++)
            {
                $this -> valor1 = $this -> model -> cantidad($_POST["idProducto"][$i],$i);
                $this -> result = $this -> model -> entrada($this -> valor1['cantidad'],$i);
                $this -> model -> editInventory($this -> result,$i);
            }
            $arrResponse = array('status'=> true ,'msg'=>'La reposición de productos se realizó con éxito');
            echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
            $this -> model -> cerrarConexion();
        }
    }
    
    /*require('../../Models/InventoryModel.php');
    $pro = new InventoryModel();
    $datos = $pro -> mostrarProducto();
    if(isset ($_POST["entrada"]) && $_POST["entrada"] == "true"){
        $valor1 = $pro -> cantidad($_POST["id"]);
        $result   = $pro -> entrada($valor1['cantidad']);
        if ($result < 0)
        {
            header("location: con-intController.php?m=3");
            exit;
        }
        else
        $pro -> editInventory($result);
        header("location: con-intController.php?m=2");
        exit;
    }
    $int = new InventoryModel();
    $entrada = $int -> mostrarEntrada();
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/con-int.php');*/

?>