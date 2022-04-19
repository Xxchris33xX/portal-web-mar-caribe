<?php
require_once ROOT . PATH_MODELS . 'ContactsModel.php';
include 'app/Helpers/login/login.php';
include ROOT . PATH_MODELS . 'BD_Conect.php';
require_once ROOT . PATH_MODELS . 'loginModel.php';

    session_start();
    if(isset($_SESSION["user"]))
    {
        header('location:'.FOLDER_PATH.'/sistema/dashboard');
    }
class loginController extends Controller
{
    private $carpeta;
    private $model;
    public $contactos;
    public $username;
    public $password;
    public $result;

    public function __construct($carpeta)
    {
        $this -> carpeta = $carpeta;
    }

    
    public function exec($param)
    {
        $this -> show();
    }

    public function validation()
    {
        header('Content-type: application/json');
        $this -> result = array();

        if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_POST['Nom_usuario'])&&isset($_POST['Contrasenia']))
        {
            $this -> username = validate($_POST['Nom_usuario']);
            $this -> password = validate($_POST['Contrasenia']);
            $this -> result = array("estado" => true);
            if(loginController::login($this -> username, $this ->password))
            {
                $user = loginController::getUser($this -> username, $this ->password);
                $_SESSION["user"] = array(
                    "id_usuario"=> $user -> getId(),
                    "nom_usuario"=> $user -> getusername(),
                    "rol_usuario"=> $user -> getPrivilegio()
                );
                
            }  
                return print(json_encode($this -> result));
                
        }
        $this -> result = array("estado" => false);
            return print(json_encode($this -> result));
        
        }
    }

    public static function login($username,$password)
        {
            $obj_user = new User();
            $obj_user -> setusername($username);
            $obj_user -> setPassword($password);

            return usuarioDao::login($obj_user);
        }

        public static function getUser($username,$password){
            $obj_user = new User();
            $obj_user ->setusername($username);
            $obj_user ->setPassword($password);

            return usuarioDao::getUser($obj_user);
        }
    
    public function closeSession()
    {
        session_start();
        session_destroy();
        session_unset();
        header('location:' . FOLDER_PATH . '/sistema/login/');
    }

    public function show()
    {
        $params = array('contactos' => $this -> contactos);
        $this->render($this -> carpeta,__CLASS__, $params);
        //print_r($params);
    }
}
//print"$controlador";

    //require('../../Views/Sistema/login.php');*/
?>