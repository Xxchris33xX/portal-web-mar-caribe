<?php
//Todos los modelos que se vayan a utilizar deben ser requeridos/incluidos
require_once ROOT . PATH_MODELS . 'ContactsModel.php';
require_once ROOT . PATH_MODELS . 'CountViewsModel.php';

//Esta linea sirve para evitar que se pueda acceder al archivo directamente sin pasar por el index
defined('BASEPATH') or exit('No se permite acceso directo');

/* Como funciona el controlador:
    1-Tanto el nombre del archivo como el nombre de la clase
    tienen que tener el nombre de la vista y al final la palabra "Controller" en mayusculas
    2-Hacer obligatoriamente extends a Controller
    3-Tener un public function exec($param)
    4-Para mostrar la vista se tiene que usar el metodo $this->render(__CLASS__, $params);
*/

class homepageController extends Controller
{
    private $model;
    private $model1;
    public $contactos;
    public $contador;
    public function __construct()
    {
        $this -> model = new ContactsModel();
        $this -> contactos = $this -> model -> mostrarContactos();
        $this -> model -> cerrarConexion();
        Database::connect(HOST, USER, PASSWORD, DB_NAME);
        $this -> model1 = new CountViewsModel();
        $this -> contador = $this -> model1 -> addPageview();
        $this -> model -> cerrarConexion();
    }

    
    public function exec($param)
    {
        $this -> show();
    }

    
    public function show()
    {
        $params = array('contactos' => $this -> contactos);
        $this->render(__CLASS__, $params);
        //print_r($params);
    }
}
    
    //print_r($contactos);
    //require('../../Views/Catalogo/homepage.php'); 
?>