<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODELS . 'UserModel.php';
require_once ROOT . PATH_MODELS . 'LogModel.php';

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

    class con_userController extends Controller
    {
        
        private $model;

        public $datos;
        public $rol;
        public $historial;
        public function __construct()
        {
            
            $this -> model = new UserModel();
           // $this -> rol = $this -> model -> mostrarRol();
           // $this -> datos = $this -> model -> mostrarUsuario();
            $this -> model -> cerrarConexion();

        }
        
        public function JSON()
        {
            $this -> model = new UserModel();
            $this -> datos = $this -> model -> mostrarUsuarioJSON();
            $this -> model -> cerrarConexion();
            die();
        }

        public function inactivoJSON()
        {
            $this -> model = new UserModel();
            $this -> datos = $this -> model -> mostrarUsuarioInactivoJSON();
            $this -> model -> cerrarConexion();
            die();
        }

        public function getHistorybyUserId(){
            //$html = '';
            $this -> model = new LogModel();
            $this -> historial = $this -> model -> mostrarHistorialPorUsuario($_GET['id']);
            /*$arrHistorial = $this -> historial;
            
            foreach($arrHistorial as $arrHistorial){
                $html .='
                <tr>
                    <th>'.$arrHistorial['id_historial'].'</th>
                    <th>'.$arrHistorial['nom_usuario'].'</th>
                    <th>'.$arrHistorial['mensaje'].'</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                </tr>
                '; 
            }*/
            //echo($html);
            $this -> model -> cerrarConexion();
            die();
        }
        
        public function exec($param)
        {   

            $this -> showEmpty();
    
        }
    
        public function show($data = '')
        {
            $params = array('datos' => $this -> datos,
                            'rol' => $this -> rol,
                            'historial' => $data);
            $this->render(__CLASS__, $params);
            //print_r($params);
        }

        public function showEmpty()
        {
            $params = array('datos' => $this -> datos,
                            'rol' => $this -> rol);
            $this->render(__CLASS__, $params);
            //print_r($params);
        }
        
        public function grabar()
        {
            $this -> model -> editarUsuario($_POST["id"]);
            header('Location:'. FOLDER_PATH .'/con_user/exec/?m=3');
            $this -> model -> cerrarConexion();
        }

        public function eliminar()
        {
            $this -> model -> eliminarUsuario($_GET["id"]);
            header('Location:'. FOLDER_PATH .'/con_user/exec/?m=4');
            $this -> model -> cerrarConexion();

        }

        public function activar()
        {
            $this -> model -> activarUsuario($_GET["id"]);
            header('Location:'. FOLDER_PATH .'/con_user/exec/?m=7');
            $this -> model -> cerrarConexion();

        }
        
    }

    /*require('../../Models/UserModel.php');
    $user = new UserModel();
    
        $datos = $user ->mostrarUsuario();
        $rol = $user ->get_rol();
    session_start();
    if(empty($_SESSION["user"])){ header('location:login.php'); }
    require('../../Views/Sistema/con-user.php');*/
?>