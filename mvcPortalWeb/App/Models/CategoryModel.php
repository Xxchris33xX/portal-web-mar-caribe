<?php
//print_r($_POST);
//print_r($_GET);
class CategoryModel extends Model
{
    public function __construct()
    {
       parent::__construct();
    }

    public function mostrarCategoria(){
        $sql="SELECT * FROM categoria
        ORDER BY id_categoria DESC; " ;
        foreach ($this->conn->query($sql) as $row){
            $this->c[]=$row;
        }
            return $this->c;
            $this->conn=null;
    }

    public function insertarCategoria()
    {
        print_r($_POST);
        if(empty($_POST["Nom_categoria"]))
        {
            header('location:'.FOLDER_PATH.'/sistema/con_cat//?m=1');
            exit;
        }
        else
        $sql = "INSERT INTO categoria VALUES (default,?);";
        $stmt = $this->conn->prepare ($sql);
        $stmt -> BindValue(1, $_POST["Nom_categoria"], PDO::PARAM_STR);
        $stmt -> execute();
        //$this->createLog($id);
        $this->conn=null;
        header('location:'.FOLDER_PATH.'/sistema/con_cat//?m=2');
    }

    public function editarCategoria()
    {
        if(empty($_POST["Nom_categoria"]))
        {
            header('location:'.FOLDER_PATH.'/sistema/con_cat//?m=1');
            exit;
        }else
        $sql="UPDATE categoria
            SET
            nom_categoria=?
            WHERE
            id_categoria=?;
            ";
        $stmt = $this->conn->prepare ($sql);
        $stmt -> BindValue(1, $_POST["Nom_categoria"], PDO::PARAM_STR);
        $stmt -> BindValue(2, $_POST["id"], PDO::PARAM_INT);
        $stmt -> execute();
        $this->conn=null;
        header('location:'.FOLDER_PATH.'/sistema/con_cat//?m=2');
    }
    public function eliminarCategoria($id)
    {
        //falta por cambiar a soft DELETE
        $sql="DELETE FROM categoria WHERE id_categoria=?";
        $stmt = $this->conn->prepare ($sql);
        $stmt ->BindParam(1,$id);
        $stmt -> execute();
        $this->conn=null;
        header('location:'.FOLDER_PATH.'/sistema/con_cat//?m=4');
    }
}
