<?php
//print_r($_POST);
class producto {

    private $conn;
    private $n;
    private $c;
    public function __construct(){
        try {
            $this -> conn = new PDO (
            "pgsql:host=localhost; 
            dbname=TiendaMarCaribeCenter", 
            "admin", 
            "admin");
            $this -> n = array();
            //echo "Se conecto a la base de datos";
            }
        catch( PDOException $exp){
            echo ("No se logro conectar a la base de datos correctamente, $exp");
            }
        }

    public function get_producto(){
        $sql="SELECT * FROM producto 
            LEFT JOIN categoria 
            ON producto.categoria=categoria.id_categoria
            LEFT JOIN estatus
            ON producto.estatus=estatus.id_estatus ;";
        foreach ($this->conn->query($sql) as $row){
            $this->n[]=$row;
        }
            return $this->n;
            $this->conn=null;
    }

    public function get_categoria(){
        $sql1="SELECT * FROM categoria ; " ;
        foreach ($this->conn->query($sql1) as $row){
            $this->c[]=$row;
        }
            return $this->c;
            $this->conn=null;
    }

    public function get_producto_por_id($id){
        $sql="SELECT * FROM producto WHERE id_producto= ? ;";
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

    public function create_producto(){
        print_r($_POST);
        if(empty($_POST["Nom_producto"]) 
        or empty($_POST["Categoria"])
        or empty($_POST["Imagen"])
        or empty($_POST["Cantidad"]) 
        or empty($_POST["Precio"])
        or empty ($_POST["Estatus"]))
        {
            header("location: reg-pro.php?m=1");
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
        $stmt -> BindValue(7, $_POST["Estatus"], PDO::PARAM_INT);

        $stmt -> execute();
        $this->conn=null;
        header("location: reg-pro.php?m=2");
    }

    public function edit_producto(){
        print_r($_POST);
        if(empty($_POST["Nom_producto"]) 
        or empty($_POST["Categoria"])
        or empty($_POST["Imagen"])
        or empty($_POST["Cantidad"]) 
        or empty($_POST["Precio"])
        or empty ($_POST["Estatus"]))
        {
            header("location: reg-pro.php?m=1&id=".$_POST["id"]);
            exit;
        }
        else
         $sql="UPDATE producto
            SET
            nombre=?,
            descripcion=?,
            imagen=?,
            precio=?,
            cantidad=?,
            fecha_vencimiento=?,
            categoria=?,
            estatus=?
            WHERE
            id_producto=?;
            ";
        $stmt = $this->conn->prepare ($sql);
        $stmt -> BindValue(1, $_POST["Nombre"], PDO::PARAM_STR);
        $stmt -> BindValue(2, "Producto de Mar Caribe Center", PDO::PARAM_STR);
        $stmt -> BindValue(3, $_POST["Imagen"], PDO::PARAM_STR);
        $stmt -> BindValue(4, $_POST["Precio"], PDO::PARAM_STR);
        $stmt -> BindValue(5, $_POST["Cantidad"], PDO::PARAM_STR);
        $stmt -> BindValue(6, $_POST["Categoria"], PDO::PARAM_STR);
        $stmt -> BindValue(7, $_POST["Estatus"], PDO::PARAM_INT);
        $stmt -> BindValue(8, $_POST["id"], PDO::PARAM_INT);
        
        $stmt -> execute();
        $this->conn=null;
        header("location: reg-pro.php?m=2&id=".$_POST["id"]);
    }

    public function delete_producto($id){
        $sql="DELETE  FROM producto WHERE id_producto=?";
        $stmt = $this->conn->prepare ($sql);
        $stmt ->BindParam(1,$id);
        $stmt -> execute();
        $this->conn=null;
        header("location: con-pro.php?m=1");
    }  
}
?>