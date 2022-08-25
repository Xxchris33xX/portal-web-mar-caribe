<?php

defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODELS . 'UserModel.php';
  session_start();
  if(empty($_SESSION["user"])) { 
    header('location:'. FOLDER_PATH .'/login'); }

    class log_editController extends Controller
    {
        
        private $model;
        public $datos;
        public $rol;

        public function __construct()
        {
            
            $this -> model = new UserModel();
           // $this -> rol = $this -> model -> mostrarRol();
            $this -> datos = $this -> model -> mostrarUsuarioPorId($_SESSION['user']["id_usuario"]);
            $this -> model -> cerrarConexion();

        }
    
    
        public function exec($param)
        {
            $this -> show();
        }
    
        public function show()
        {
            $params = array('datos' => $this -> datos, 'rol' => $this -> rol);
            $this->render(__CLASS__, $params);
            //print_r($params);
        }

        public function grabar()
        {
            $this -> model -> editarUsuarioSesion($_SESSION['user']["id_usuario"]);
            $this -> model -> cerrarConexion();
        }

        public function editarContrasenia(){
            $this -> model -> editarContraseniaSesion($_SESSION['user']["id_usuario"]);
            $this -> model -> cerrarConexion();
        }

    }

?>