<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODELS . 'UserModel.php';
require_once ROOT . PATH_MODELS . 'ProductModel.php';
require_once ROOT . PATH_MODELS . 'ContactsModel.php';
  session_start();
  if(empty($_SESSION["user"])) { 
    header('location:login'); }

class dashboardController extends Controller
{
    private $carpeta;
    private $model;
    private $model1;
    private $model2;
    public $contactos;
    public $productos;
    public $usuarios;
    public $last;
    public function __construct($carpeta)
    {
        $this -> carpeta = $carpeta;
        $this -> model = new ContactsModel();
        $this -> contactos = $this -> model -> mostrarContactos();

        $this -> model1 = new ProductModel();
        $this -> productos = $this -> model1 -> mostrarProducto();
        $this -> last = $this -> model1 -> getLastProduct();
        
        $this -> model2 = new UserModel();
        $this -> usuarios = $this -> model2 -> mostrarUsuario();
    }

    
    public function exec($param)
    {
        $this -> show();
    }

    public function show()
    {
        $params = array(
        'datos2' => $this -> contactos, 
        'datos1' => $this -> productos,
        'datos' => $this -> usuarios,
        'last' =>  $this -> last
      );
     // for($i=0;$i<sizeof($this -> usuarios);$i++);
        $this->render($this -> carpeta,__CLASS__, $params);
        //print_r($params);
        
    }
    public function grabar()
    {
      switch($_POST["grabar"])
      {
        case 'telefono':
          $this -> model -> editarTelefono();
        break;
        case 'ubicacion':
          $this -> model -> editarUbicacion();
        break;
      }
      header('location:'.FOLDER_PATH.'/sistema/dashboard//?m=2');
    }
}
?>