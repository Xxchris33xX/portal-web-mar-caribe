<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . PATH_MODELS . 'CategoryModel.php';
  session_start();
  if(empty($_SESSION["user"])) { 
    header('location: /login'); }

    class con_catController extends Controller
    {
        
        private $model;
        public $datos;
        public function __construct()
        {
            
            $this -> model = new CategoryModel();
            $this -> model -> cerrarConexion();
            
        }
    
        
        public function exec($param)
        {
            $this -> show();
        }
    
        public function show()
        {
            $params = array('datos' => $this -> datos);
            $this->render(__CLASS__, $params);
            //print_r($params);
        }

        public function JSON()
        {
            $this -> model = new CategoryModel();
            $this -> datos = $this -> model -> mostrarCategoriaJSON();
            $this -> model -> cerrarConexion();
            die();
        }

        public function grabar()
        {
            switch($_POST["grabar"])
            {
              case 'insertar':
                $this -> model -> insertarCategoria();
                header('Location:'. FOLDER_PATH .'/con_cat/exec/?m=2');
                $this -> model -> cerrarConexion();
              break;
              case 'editar':
                $this -> model -> editarCategoria();
                header('Location:'. FOLDER_PATH .'/con_cat/exec/?m=3');
                $this -> model -> cerrarConexion();
              break;
            }   
        }

        public function eliminar()
        {
            $this -> model -> eliminarCategoria($_GET["id"]);
            header('Location:'. FOLDER_PATH .'/con_cat/exec/?m=4');
            $this -> model -> cerrarConexion();

        }

        public function getCategorias()
        {
          $htmlOptions = '';
          $this->model = new CategoryModel();
          $arrayCategoria = $this->model->mostrarCategoria();
          foreach ($arrayCategoria as $categoria){
            $htmlOptions .= '<option value="'.$categoria['id_categoria'].'">'.$categoria['nom_categoria'].'</option>';
          }
          echo $htmlOptions;
          die();
        }

    }
?>