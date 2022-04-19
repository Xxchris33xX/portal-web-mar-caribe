<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODELS . 'InventoryModel.php';
  session_start();
  if(empty($_SESSION["user"])) { 
    header('location:login'); }

    class con_intController extends Controller
    {
        private $carpeta;
        private $model;
        private $model1;
        public $datos;
        public $entrada;
        public $valor1;
        public $result;
        public function __construct($carpeta)
        {
            $this -> carpeta = $carpeta;
            $this -> model = new InventoryModel();
            $this -> datos = $this -> model -> mostrarProducto();
            $this -> model1 = new InventoryModel();
            $this -> entrada = $this -> model1 -> mostrarEntrada();
        }
    
        
        public function exec($param)
        {
            $this -> show();
        }
    
        public function show()
        {
            $params = array('datos' => $this -> datos,'entrada' => $this -> entrada);
            $this->render($this -> carpeta,__CLASS__, $params);
            //print_r($params);
        }

        public function grabar()
        {
            $this -> valor1 = $this -> model -> cantidad($_POST["id"]);
            $this -> result = $this -> model -> entrada($this -> valor1['cantidad']);
            if ($result < 0)
            {
            header("location: con-intController.php?m=3");
            exit;
            }
            else
            $this -> model -> editInventory($this -> result);
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