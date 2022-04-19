<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODELS . 'CategoryModel.php';
  session_start();
  if(empty($_SESSION["user"])) { 
    header('location:login'); }

    class con_catController extends Controller
    {
        private $carpeta;
        private $model;
        public $datos;
        public function __construct($carpeta)
        {
            $this -> carpeta = $carpeta;
            $this -> model = new CategoryModel();
            $this -> datos = $this -> model -> mostrarCategoria();
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

        public function grabar()
        {
            switch($_POST["grabar"])
            {
              case 'insertar':
                $this -> model -> insertarCategoria();
              break;
              case 'editar':
                $this -> model -> editarCategoria();
              break;
            }   
        }

        public function eliminar()
        {
            $this -> model -> eliminarCategoria($_GET["id"]);
        }
    }



/*   session_start();
    $id_usuario = $_SESSION["user"]["id_usuario"];
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Models/CategoryModel.php');
    $cat = new CategoryModel();
    $datos = $cat -> mostrarCategoria();
    if(isset ($_POST["grabar"]) && $_POST["grabar"] == "true"){
        $cat -> insertarCategoria($id_usuario);
        exit;
    }
    if(isset ($_POST["editar"]) && $_POST["editar"] == "true"){
        $cat -> editarCategoria();
        exit;
    }
    require('../../Views/Sistema/con-cat.php');*/
?>