<?php
require_once ROOT . PATH_MODELS . 'ContactsModel.php';
require_once ROOT . PATH_MODELS . 'productModel.php';
defined('BASEPATH') or exit('No se permite acceso directo');
class productController extends Controller
{
    private $carpeta;
    private $model;
    private $model1;
    public $contactos;
    public $productos;
    public function __construct($carpeta)
    {
        $this -> carpeta = $carpeta;
        $this -> model = new ContactsModel();
        $this -> model1 = new ProductModel();
        $this -> contactos = $this -> model -> mostrarContactos();
        $this -> productos = $this -> model1 -> getProduct_por_id($_GET["id"]);
    }

    public function exec($param)
    {
        $this -> show();
    }

    public function show()
    {
        $params = array('contactos' => $this -> contactos, 'datos' => $this -> productos );
        $this->render($this -> carpeta,__CLASS__, $params);
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