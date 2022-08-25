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


    class reg_userController extends Controller
    {
        
        private $model;
        public $datos;
        public function __construct()
        {
            
            $this -> model = new UserModel();
            //$this -> datos = $this -> model -> mostrarRol();
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

        public function grabar()
        {
            $this -> model -> insertarUsuario();
            header('Location:'. FOLDER_PATH .'/con_user/exec/?m=2');
            $this -> model -> cerrarConexion();
        }

    }
   
   
    /*require('../../Models/UserModel.php');
    $user = new UserModel();
    if(isset ($_POST["grabar"]) && $_POST["grabar"] == "true"){
        $user -> insertarUsuario();
        exit;
    }
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/reg-user.php');*/
?>