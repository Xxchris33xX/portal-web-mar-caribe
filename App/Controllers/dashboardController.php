<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODELS . 'UserModel.php';
require_once ROOT . PATH_MODELS . 'ContactsModel.php';
require_once ROOT . PATH_MODELS . 'InventoryModel.php';
require_once ROOT . PATH_MODELS . 'CountViewsModel.php';
  session_start();
  if(empty($_SESSION["user"])) { 
    header('location:'. FOLDER_PATH .'/login'); }

class dashboardController extends Controller
{
    
    private $model;
    private $model1;
    private $model2;
    private $model3;
    public $contactos;
    public $totalproducts;
    public $totalusers;
    public $last;
    public $last2;
    public $last3;
    public $viewsAll;
    public $views;
    public function __construct()
    {
        
        $this -> model = new ContactsModel();
        $this -> contactos = $this -> model -> mostrarContactos();
        $this -> model -> cerrarConexion();

        $this -> model1 = new InventoryModel();
        $this -> totalproducts = $this -> model1 -> totalProductos();
        $this -> last = $this -> model1 -> mostrarUltimoProducto();
        $this -> last2 = $this -> model1 -> mostrarUltimaEntrada();
        $this -> last3 = $this -> model1 -> mostrarUltimaSalida();
        $this -> model -> cerrarConexion();

        $this -> model2 = new UserModel();
        $this -> totalusers = $this -> model2 -> totalUsuarios();

        $this -> model -> cerrarConexion();
        
        Database::connect(HOST, USER, PASSWORD, DB_NAME);
        $this -> model3 = new CountViewsModel();
        $this -> viewsAll = $this-> model3->totalPageviews();
        $this -> views = $this-> model3->totalUips();
        $this -> model -> cerrarConexion();

    }
    
    public function grabar()
    {
      $this -> model = new ContactsModel();
      switch($_POST["grabar"])
      {
        case 'telefono':
          $this -> model -> editarTelefono();
          $this -> model -> cerrarConexion();
        break;
        case 'ubicacion':
          $this -> model -> editarUbicacion();
          $this -> model -> cerrarConexion();
        break;
      }
    }
    
    public function exec($param)
    {
      //print_r ($_SESSION['user']);
        $this -> show();
    }

    

    public function show()
    {
        $params = array(
        'datos2' => $this -> contactos, 
        'totalproducts' => $this -> totalproducts,
        'totalusers' => $this -> totalusers,
        'last' =>  $this -> last,
        'last2' =>  $this -> last2,
        'last3' =>  $this -> last3,
        'viewsAll' => $this-> viewsAll,
        'views' => $this -> views
      );
     // for($i=0;$i<sizeof($this -> usuarios);$i++);
        $this->render(__CLASS__, $params);
        //print_r($params);
        
    }
    public function historial()
        {
            $this -> model -> insertarHistorial($_SESSION['user']['id_usuario'],$_GET['entidad'],$_GET['mensaje']);
            header('Location:'. FOLDER_PATH .'/dashboard/exec/?m=2');
        }

    public function closeSession()
    {
        session_start();
        session_destroy();
        session_unset();
        header('Location:'. FOLDER_PATH .'/login');
    }
    
}
?>