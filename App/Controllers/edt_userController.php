<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODELS . 'UserModel.php';
  session_start();
  if(isset($_SESSION["user"]))
  {
  if($_SESSION['user']['rol_usuario'] != 1)
      {
          header('location:'. FOLDER_PATH .'/dashboard');
      }
    
   }
   else
   {
     header('location:'. FOLDER_PATH .'/login');
   }
    class edt_userController extends Controller
    {
        
        private $model;
        public $datos;
        public $rol;
        public function __construct()
        {
            
            $this -> model = new UserModel();
            $this -> rol = $this -> model -> mostrarRol();
            $this -> datos = $this -> model -> mostrarUsuarioPorId($_GET["id"]);
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
            $this ->model -> editarUsuario();
            $this -> model -> cerrarConexion();
        }
    }
?>