<?php
//print_r($_POST);
//print_r($_GET);
require_once 'Model.php';
class ContactsModel extends Model
{
    public function __construct()
    {
       parent::__construct();
    }

    public function mostrarContactos()
    {
            $sql="SELECT * FROM datos_tienda WHERE id_datos = '1';";
            $stmt = $this->conn->prepare ($sql);
            $stmt->execute();
            $row = $stmt->fetch();
            return $row;
    }
    
    public function editarTelefono()
    {
        if(empty($_POST["telefono"]))
        {
            header("location: dasboardController.php?m=1");
            exit;
        }else
        $sql="UPDATE datos_tienda
            SET
            telefono_tienda=?
            WHERE
            id_datos='1';
            ";
        $stmt = $this->conn->prepare ($sql);
        $stmt -> BindValue(1, $_POST["telefono"], PDO::PARAM_STR);
        $stmt -> execute();
        $this->conn=null;
        header("location: dashboardController.php?m=2");
    }
    public function editarUbicacion()
    {
        if(empty($_POST["ubicacion"]))
        {
            header("location: dashboardController.php?m=1");
            exit;
        }else
        $sql1="UPDATE datos_tienda
            SET
            ubicacion_tienda=?
            WHERE
            id_datos='1';
            ";
        $stmt1 = $this->conn->prepare ($sql1);
        $stmt1 -> BindValue(1, $_POST["ubicacion"], PDO::PARAM_STR);
        $stmt1 -> execute();
        $this->conn=null;
        header("location: dashboardController.php?m=2");
    }
}