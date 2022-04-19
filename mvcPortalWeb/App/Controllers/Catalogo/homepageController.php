<?php

require_once ROOT . PATH_MODELS . 'ContactsModel.php';
defined('BASEPATH') or exit('No se permite acceso directo');
class homepageController extends Controller
{
    private $carpeta;
    private $model;
    public $contactos;
    public function __construct($carpeta)
    {
        $this -> carpeta = $carpeta;
        $this -> model = new ContactsModel();
        $this -> contactos = $this -> model -> mostrarContactos();
    }

    
    public function exec($param)
    {
        $this -> show();
    }

    public function show()
    {
        $params = array('contactos' => $this -> contactos);
        $this->render($this -> carpeta,__CLASS__, $params);
        //print_r($params);
    }
}
    
    //print_r($contactos);
    //require('../../Views/Catalogo/homepage.php'); 
?>