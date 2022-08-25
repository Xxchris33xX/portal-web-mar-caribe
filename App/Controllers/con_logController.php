<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODELS . 'LogModel.php';
require_once ROOT . PATH_MODELS . 'UserModel.php';
  session_start();
  if(empty($_SESSION["user"])) { 
    header('location:'. FOLDER_PATH .'/login'); }

    class con_logController extends Controller
    {
        
        private $model;
        private $model1;
        public $datos;
        public $producto;
        public $usuario;
        public $entrada;
        public $salida;
        public function __construct()
        {
            
            $this -> model = new LogModel();
            $this -> datos = $this -> model -> mostrarHistorialPorUsuario($_GET['id']);
            $this -> model -> cerrarConexion();

            $this -> model1 = new UserModel();
            $this -> user = $this -> model1 -> mostrarUsuarioPorId($_GET["id"]);
            $this -> model -> cerrarConexion();
            
        }
    
        
        public function exec($param)
        {
            $this -> show();
        }
    
        public function show()
        {
            $params = array('datos' => $this -> datos,
                            'user' => $this -> user);
            $this->render(__CLASS__, $params);
            //print_r($params);
        }
    }   
    
    /*require('../../Models/LogModel.php');
    $log = new LogModel();
    $datos = $log -> getLog();
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/con-log.php');*/
?>