<?php
//print_r($_POST);
//print_r($_GET);
class ContactsModel extends Model
{
    public function __construct()
    {
       parent::__construct();
    }

    /****************************************************************
	*** Metodo para mostrar la información de contactos del local ***
	*****************************************************************/

    public function mostrarContactos()
    {
            $sql="SELECT * FROM informacion WHERE id_informacion = '1';";
            $stmt = $this->conn->prepare ($sql);
            $stmt->execute();
            $row = $stmt->fetch();
            
            return $row;
            
    }
    
    /*********************************************************************
	*** Metodo para editar el numero telefonico del local en la pagina ***
	**********************************************************************/

    public function editarTelefono()
    {
        parent::__construct();
        if(empty($_POST["telefono"]))
        {
            header("location:". FOLDER_PATH ."/dashboard/exec/?m=1");
            exit;
        }else
        $sql="UPDATE informacion
            SET
            telefono=?
            WHERE
            id_informacion='1';
            ";
        $stmt = $this->conn->prepare ($sql);
        $stmt -> BindValue(1, $_POST["telefono"], PDO::PARAM_STR);
        $stmt -> execute();
        header('Location: '. FOLDER_PATH .'/dashboard/historial/?m=2&mensaje='.$_POST['Mensaje'].'&entidad='.$_POST['Entidad']);
    }

    /************************************************************* 
	*** Metodo para editar la dirección del local en la pagina ***
	**************************************************************/

    public function editarUbicacion()
    {
        parent::__construct();
        if(empty($_POST["ubicacion"]))
        {
            header("location:". FOLDER_PATH ."/dashboard/exec/?m=1");
            exit;
        }else
        $sql1="UPDATE informacion
            SET
            ubicacion=?
            WHERE
            id_informacion='1';
            ";
        $stmt1 = $this->conn->prepare ($sql1);
        $stmt1 -> BindValue(1, $_POST["ubicacion"], PDO::PARAM_STR);
        $stmt1 -> execute();
        header('Location: '. FOLDER_PATH .'/dashboard/historial/?m=2&mensaje='.$_POST['Mensaje'].'&entidad='.$_POST['Entidad']);
    }
}