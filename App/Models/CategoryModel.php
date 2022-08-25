<?php
//print_r($_POST);
//print_r($_GET);
class CategoryModel extends Model
{
    public function __construct()
    {
       parent::__construct();
    }

    /**************************************** 
	*** Metodo para listar las categorias ***
	*****************************************/

    public function mostrarCategoria(){
        $sql="SELECT * FROM categoria
        WHERE categoria.estado = '1'
        ORDER BY id_categoria DESC; " ;
        foreach ($this->conn->query($sql) as $row){
            $this->c[]=$row;
        }
            return $this->c;
    
    }

    /**************************************** 
	*** Metodo para listar las categorias ***
	*****************************************/

    public function mostrarCategoriaPorId($id){
        $sql="SELECT nom_categoria FROM categoria
        WHERE categoria.estado = '1' AND id_categoria = ?" ;
        $stmt = $this->conn->prepare ($sql);

        $stmt->execute(array($id));
        
        $row = $stmt->fetch();
            return $row;
    
    }

    /******************************************************************* 
	*** Metodo para listar las categorias con JSON para el DataTable ***
	********************************************************************/

    public function mostrarCategoriaJSON(){
        $sql="SELECT * FROM categoria
        WHERE categoria.estado = '1'
        ORDER BY id_categoria DESC; " ;
        foreach ($this->conn->query($sql) as $row){
            $this->c[]=$row;
        }
        echo json_encode($this->c,JSON_UNESCAPED_UNICODE);
        
    }

    /*********************************** 
	*** Metodo para crear categorias ***
	************************************/

    public function insertarCategoria()
    {
        parent::__construct();
        print_r($_POST);
        if(empty($_POST["Nom_categoria"]))
        {
            
            header('Location:'. FOLDER_PATH .'/con_cat/exec/?m=1');
            exit;
        }
        else{

        $checkNameExist = "SELECT nom_categoria 
        FROM categoria
        WHERE nom_categoria = ?";

        $stmt = $this->conn->prepare($checkNameExist);
        $stmt -> bindValue(1,$_POST["Nom_categoria"], PDO::PARAM_STR);
        $stmt -> execute();

        if($stmt->rowCount()>0){
            header('Location:'. FOLDER_PATH .'/con_cat/exec/?m=5');
            exit;
        }


        $sql = "INSERT INTO categoria VALUES (default,?,default);";
        $stmt = $this->conn->prepare ($sql);
        $stmt -> BindValue(1, $_POST["Nom_categoria"], PDO::PARAM_STR);
        $stmt -> execute();
        parent::insertarHistorial($_SESSION['user']['id_usuario'],$_POST['Nom_categoria'],$_POST['Mensaje']);
        }
    }

    /************************************
	*** Metodo para editar categorias ***
	*************************************/

    public function editarCategoria()
    {
        parent::__construct();
        if(empty($_POST["Edit_categoria"]))
        {
            header('Location:'. FOLDER_PATH .'/con_cat/exec/?m=1');
            exit;
        }else{
        $checkNameExist = "SELECT nom_categoria 
        FROM categoria
        WHERE nom_categoria = ? AND id_categoria != ?";

        $stmt = $this->conn->prepare($checkNameExist);
        $stmt -> bindValue(1,$_POST["Edit_categoria"], PDO::PARAM_STR);
        $stmt -> bindValue(2,$_POST["id"], PDO::PARAM_INT);
        $stmt -> execute();

        if($stmt->rowCount()>0){
            header('Location:'. FOLDER_PATH .'/con_cat/exec/?m=5');
            exit;
        }

        $sql="UPDATE categoria
            SET
            nom_categoria=?
            WHERE
            id_categoria=?;
            ";
        $stmt = $this->conn->prepare ($sql);
        $stmt -> BindValue(1, $_POST["Edit_categoria"], PDO::PARAM_STR);
        $stmt -> BindValue(2, $_POST["id"], PDO::PARAM_INT);
        $stmt -> execute();
        parent::insertarHistorial($_SESSION['user']['id_usuario'],$_POST['Edit_categoria'],$_POST['Mensaje']);
        }
    }

    /**************************************
	*** Metodo para eliminar categorias ***
	***************************************/

    public function eliminarCategoria($id)
    {
        parent::__construct();
        $checkProductExist = "SELECT id_producto 
        FROM producto
        LEFT JOIN categoria
        ON producto.categoria = categoria.id_categoria
        WHERE categoria.id_categoria = ?";
        $stmt = $this->conn->prepare($checkProductExist);
        $stmt -> bindParam(1,$id);
        $stmt -> execute();

        if($stmt->rowCount()>0){
            header('Location:'. FOLDER_PATH .'/con_cat/exec/?m=6');
            exit;
        }else
        $sql1="DELETE FROM categoria WHERE id_categoria=?";
        $stmt1 = $this->conn->prepare ($sql1);
        $stmt1 ->BindParam(1,$id);
        $stmt1 -> execute();
        parent::insertarHistorial($_SESSION['user']['id_usuario'],$_GET['Nom_categoria'],$_GET['Mensaje']);
    }
}
