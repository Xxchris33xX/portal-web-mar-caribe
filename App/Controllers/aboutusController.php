<?php
require_once ROOT . PATH_MODELS . 'ContactsModel.php';
require_once ROOT . PATH_MODELS . 'ProductModel.php';
defined('BASEPATH') or exit('No se permite acceso directo');
class aboutusController extends Controller
{
    private $model;
    private $model1;
    public $contactos;
    public $productos;
    public function __construct()
    {
        $this -> model = new ContactsModel();
        $this -> contactos = $this -> model -> mostrarContactos();
        $this -> model -> cerrarConexion();
        
        $this -> model1 = new ProductModel();
        $this -> productos = $this -> model1 -> mostrarProducto();
        $this -> model -> cerrarConexion();
    }

    public function exec($param)
    {
        $this -> show();
    }

    public function show()
    {
        $params = array('contactos' => $this -> contactos, 'datos' => $this -> productos );
        $this->render(__CLASS__, $params);
        //print_r($params);
    }
}
    /*require('../../Models/ContactsModel.php');
    $con = new ContactsModel();
    $contactos = $con -> mostrarContactos();
    require('../../Models/ProductModel.php');
    $pro = new productModel();
    $datos = $pro ->mostrarProducto();
    require('../../Views/Catalogo/aboutus.php');*/
?>