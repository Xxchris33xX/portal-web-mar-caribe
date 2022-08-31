<?php
require_once ROOT . PATH_MODELS . 'ContactsModel.php';
include ROOT . FOLDER_PATH .'/App/Helpers/login/login.php';
include ROOT . PATH_MODELS . 'BD_Conect.php';
require_once ROOT . PATH_MODELS . 'loginModel.php';

    session_start();
    if(isset($_SESSION["user"]))
    {
        header( 'location:'. FOLDER_PATH .'/dashboard');
    }
class loginController extends Controller
{
    
    private $model;
    private $captcha_private_key = '';
    public $contactos;
    public $username;
    public $password;
    public $result;

    public function __construct()
    {
        
    }

    
    public function exec($param)
    {
        $this -> show();
    }

    public function validation()
    {
        header('Content-type: /application/json');
        $this -> result = array();

        if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        //$captcha = $_POST['g-recaptcha-response'];

        // if(!$captcha){
        //     $this -> result = array("estado" => false,"msg"=>"Completar el captcha");
        //     return print(json_encode($this -> result));
        // }

        // $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$this->captcha_private_key&response=$captcha");

        // $arr =  json_decode($response, TRUE);

        // if(!$arr['success']){
        //     $this -> result = array("estado" => false,"msg"=>"Ha ocurrido un error, vuelva a completar el captcha");
        //     return print(json_encode($this -> result));
        // }

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
                //$sesion = insertarSesion($_SESSION['user']['id_usuario']);
                return print(json_encode($this -> result));
            }  
               
        }
        $this -> result = array("estado" => false,"msg"=>"Usuario o contraseña incorrecta");
        
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
    
    

    public function show()
    {
        $params = array('contactos' => $this -> contactos);
        $this->render(__CLASS__, $params);
        //print_r($params);
    }
}
//print"$controlador";

    //require('../../Views/Sistema/login.php');*/
?>