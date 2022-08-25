<?php
require_once ROOT . PATH_MODELS . 'ContactsModel.php';
require_once ROOT . PATH_MODELS . 'ProductModel.php';
defined('BASEPATH') or exit('No se permite acceso directo');
class productController extends Controller
{
    
    private $model;
    private $model1;
    public $contactos;
    public $productos;
    public $similar;
    public function __construct()
    {
        
        $this -> model = new ContactsModel();
        $this -> contactos = $this -> model -> mostrarContactos();
        $this -> model -> cerrarConexion();

        $this -> model1 = new ProductModel();
        $this -> productos = $this -> model1 -> mostrarProductoPorId($_GET["id"]);
        $this -> similar = $this -> model1 -> mostrarProductoSimilar($_GET["cat"],$_GET["id"]);
        $this -> model -> cerrarConexion();
        
    }

    public function exec($param)
    {
        $this -> show();
    }

    public function show()
    {
        $params = array('contactos' => $this -> contactos,
        'datos' => $this -> productos,
        'similar' => $this -> similar);
        $this->render(__CLASS__, $params);
    }
}
    /*require('../../Models/ProductModel.php');
    $pro = new productModel();
    $datos = $pro -> getProduct_por_id($_GET["id"]);
    require('../../Models/ContactsModel.php');
    $con = new ContactsModel();
    $contactos = $con -> mostrarContactos();
    require('../../Views/Catalogo/product.php');*/
?>