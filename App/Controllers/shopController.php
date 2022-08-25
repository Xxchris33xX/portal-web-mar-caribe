<?php
require_once ROOT . PATH_MODELS . 'ContactsModel.php';
require_once ROOT . PATH_MODELS . 'ProductModel.php';
require_once ROOT . PATH_MODELS . 'CategoryModel.php';
defined('BASEPATH') or exit('No se permite acceso directo');
class shopController extends Controller
{
    
    private $model;
    private $model1;
    private $model2;
    public $contactos;
    public $productos;
    public $cat;
    public $categoria;
    public function __construct()
    {

        
        $this -> model = new ContactsModel();
        $this -> contactos = $this -> model -> mostrarContactos();
        $this -> model -> cerrarConexion();

        $this -> model2 = new CategoryModel();
        $this -> cat = $this -> model2 -> mostrarCategoria();
        $this -> model -> cerrarConexion();

    }

    public function filtrar()
    {
        $this -> categoria = $this -> model2 -> mostrarCategoriaPorId($_GET["Categoria"]);
        $this -> model1 = new ProductModel();
        $this -> productos = $this -> model1 -> mostrarTiendaFiltrada($_GET["Categoria"],$_GET['Nom_producto']);
        $this -> model -> cerrarConexion();
        $this -> show();
    }
    
    public function exec($param)
    {
        $this -> model1 = new ProductModel();
        $this -> productos = $this -> model1 -> mostrarTienda();
        $this -> model -> cerrarConexion();
        $this -> show();
    }

    public function show()
    {
        $params = array(
            'contactos' => $this -> contactos, 
            'datos' => $this -> productos,
            'cat' => $this -> cat,
            'categoria' => $this -> categoria);
        $this->render(__CLASS__, $params);
        //print_r($params);
    }
}
  /*  require('../../Models/ProductModel.php');
    $pro = new productModel();
    $datos = $pro -> getShop();
    require('../../Models/ContactsModel.php');
    $con = new ContactsModel();
    $contactos = $con -> mostrarContactos();
    require('../../Views/Catalogo/shop.php'); */
?>