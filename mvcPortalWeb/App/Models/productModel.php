<?php
//print_r($_POST);
//print_r($_GET);
//require_once 'Model.php';
class ProductModel extends Model
{
    public function __construct()
    {
       parent::__construct();
    }

    public function mostrarProducto(){
        $sql="SELECT * FROM producto  
            LEFT JOIN categoria 
            ON producto.categoria=categoria.id_categoria
            LEFT JOIN estatus
            ON producto.estatus=estatus.id_estatus
            WHERE estatus='1' ;";
        foreach ($this->conn->query($sql) as $row){
            $this->n[]=$row;
        }
        //echo "hola";
            return $this->n;
            $this->conn=null;
    }

    public function getShop(){
        $sql="SELECT * FROM producto  
            LEFT JOIN categoria 
            ON producto.categoria=categoria.id_categoria
            LEFT JOIN estatus
            ON producto.estatus=estatus.id_estatus
            WHERE estatus='1' AND cantidad>'0';";
        foreach ($this->conn->query($sql) as $row){
            $this->n[]=$row;
        }
        //echo "hola";
            return $this->n;
            $this->conn=null;
    }
    public function getLastProduct(){
        $sql="SELECT nombre FROM producto ORDER BY id_producto DESC LIMIT 1;";
            $stmt = $this->conn->prepare ($sql);
            $stmt->execute();
            $row = $stmt->fetch();
            return $row;
    }

    public function mostrarProductoPorId($id){
        $sql="SELECT * FROM producto
        LEFT JOIN categoria 
        ON producto.categoria=categoria.id_categoria
        LEFT JOIN estatus
        ON producto.estatus=estatus.id_estatus
        WHERE id_producto= ?; ";
        $stmt = $this->conn->prepare ($sql);

        if ($stmt->execute(array($id) ))
        {
           while($row = $stmt->fetch())
           {
            $this->n[]=$row;
            }
        }
            return $this->n;
            $this->conn=null;
    }

    public function insertarProducto(){
        print_r($_POST);
        if(empty($_POST["Nom_producto"]) 
        or empty($_POST["Categoria"])
        or empty($_POST["Imagen"])
        or empty($_POST["Cantidad"]) 
        or empty($_POST["Precio"]))
        {
            header('location:'.FOLDER_PATH.'/sistema/reg_pro//?m=1');
            exit;
        }
        else
        $sql = "INSERT INTO producto VALUES (default,?,?,?,?,?,?,?);";
        $stmt = $this->conn->prepare ($sql);
        $stmt -> BindValue(1, $_POST["Nom_producto"], PDO::PARAM_STR);
        $stmt -> BindValue(2, "Producto de Mar Caribe Center", PDO::PARAM_STR);
        $stmt -> BindValue(3, $_POST["Imagen"], PDO::PARAM_STR);
        $stmt -> BindValue(4, $_POST["Precio"], PDO::PARAM_STR);
        $stmt -> BindValue(5, $_POST["Cantidad"], PDO::PARAM_STR);
        $stmt -> BindValue(6, $_POST["Categoria"], PDO::PARAM_STR);
        $stmt -> BindValue(7, '1', PDO::PARAM_INT);
        $stmt -> execute();
        $this->conn=null;
        header('location:'.FOLDER_PATH.'/sistema/reg_pro//?m=2');
    }

    public function editarProducto(){
        print_r($_POST);
        if(empty($_POST["Nom_producto"]) 
        or empty($_POST["Imagen"])
        or empty($_POST["Precio"]))
        {
            header('location:'.FOLDER_PATH.'/sistema/edt_pro//?m=1&id='.$_POST["id"]);
            exit;
        }
        else
         $sql="UPDATE producto
            SET
            nombre=?,
            imagen=?,
            precio=?
            WHERE
            id_producto=?;
            ";
        $stmt = $this->conn->prepare ($sql);
        $stmt -> BindValue(1, $_POST["Nom_producto"], PDO::PARAM_STR);
        $stmt -> BindValue(2, $_POST["Imagen"], PDO::PARAM_STR);
        $stmt -> BindValue(3, $_POST["Precio"], PDO::PARAM_STR);
        $stmt -> BindValue(4, $_POST["id"], PDO::PARAM_INT);
        $stmt -> execute();
        if (empty($_POST["Categoria"]))
        {
            $this->conn=null;
            header('location:'.FOLDER_PATH.'/sistema/con_pro//?m=2&id='.$_POST["id"]);
        }else
        $sql1="UPDATE producto
            SET
            categoria=?
            WHERE
            id_producto=?;
            ";
        $stmt1 = $this->conn->prepare ($sql1);
        $stmt1 -> BindValue(1, $_POST["Categoria"], PDO::PARAM_STR);
        $stmt1 -> BindValue(2, $_POST["id"], PDO::PARAM_INT);
        $stmt1 -> execute();
        $this->conn=null;
        header('location:'.FOLDER_PATH.'/sistema/edt_pro//?m=2&id='.$_POST["id"]);
    }

    public function eliminarProducto($id){
        $sql="UPDATE producto SET estatus='1' WHERE id_producto=?";
        $stmt = $this->conn->prepare ($sql);
        $stmt ->BindParam(1,$id);
        $stmt -> execute();
        $this->conn=null;
        header('location:'.FOLDER_PATH.'/sistema/con_pro//?m=4');
    }  
}
?>