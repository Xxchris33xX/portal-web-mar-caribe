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

    public function getContacts()
    {
            $sql="SELECT * FROM datos_tienda WHERE id_datos = '1';";
            $stmt = $this->conn->prepare ($sql);
            $stmt->execute();
            $row = $stmt->fetch();
            return $row;
    }
    
    public function editContacts()
    {
        $sql="UPDATE datos_tienda
            SET
            telefono_tienda=?,
            ubicacion_tienda=?
            WHERE
            id_producto='1';
            ";
        $stmt = $this->conn->prepare ($sql);
        $stmt -> BindValue(1, $_POST["telefono"], PDO::PARAM_STR);
        $stmt -> BindValue(2, $_POST["ubicacion"], PDO::PARAM_STR);
        $stmt -> execute();
        $this->conn=null;
        header("location: dashboardController.php?m=2");
    }
}