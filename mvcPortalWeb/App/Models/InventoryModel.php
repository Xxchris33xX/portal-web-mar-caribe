<?php
require_once 'ProductModel.php';
class InventoryModel extends ProductModel
{
    public $value1 = array();
    public $result;
    
    public function __construct()
    {
       parent::__construct();
    }

    public function cantidad($id)
    {
        $sql="SELECT * FROM producto
        LEFT JOIN categoria 
        ON producto.categoria=categoria.id_categoria
        LEFT JOIN estatus
        ON producto.estatus=estatus.id_estatus
        WHERE id_producto= ?; ";
        $stmt = $this->conn->prepare ($sql);
        $stmt->execute(array($id));
        $row = $stmt->fetch();
        return $row;
    }

    public function entrada($number1)
    {
        //print_r($_POST);
        if(empty($_POST["Cantidad"]) 
        or empty ($_POST["id"]))
        {
            header("location: con-intController.php?m=1");
            exit;
        }
        else
        $sql2 = "INSERT INTO entrada VALUES (default,?,?,default);";
        $stmt2 = $this->conn->prepare ($sql2);
        $stmt2 -> BindValue(1, $_POST["id"], PDO::PARAM_INT);
        $stmt2 -> BindValue(2, $_POST["Cantidad"], PDO::PARAM_STR);
        $stmt2 -> execute();
        $this -> $value2 = $number1;
        return  $this -> result = $this-> $value1 + $_POST["Cantidad"];
        
    }

    public function salida($number1)
    {
        //print_r($_POST);
        if(empty($_POST["Cantidad"]) 
        or empty ($_POST["id"]))
        {
            header("location: con-outController.php?m=1");
            exit;
        }
        else
        $this -> $value2 = $number1;
        $this -> result = $this-> $value1 - $_POST["Cantidad"];
        if($this -> result < 0)
        {
            header("location: con-outController.php?m=3");
            exit;
        }else
        $sql2 = "INSERT INTO salida VALUES (default,?,?,default);";
        $stmt2 = $this->conn->prepare ($sql2);
        $stmt2 -> BindValue(1, $_POST["id"], PDO::PARAM_INT);
        $stmt2 -> BindValue(2, $_POST["Cantidad"], PDO::PARAM_STR);
        $stmt2 -> execute(); 
        return  $this -> result;
    }

    public function editInventory($resultado)
    {
        $sql1="UPDATE producto
            SET
            cantidad=?
            WHERE
            id_producto=?;
            ";
        $stmt1 = $this->conn->prepare ($sql1);
        $stmt1 -> BindValue(1, $resultado, PDO::PARAM_STR);
        $stmt1 -> BindValue(2, $_POST["id"], PDO::PARAM_INT);
        $stmt1 -> execute();
        $this->conn=null;
        
    }

    public function mostrarEntrada()
    {
            $sql="SELECT * FROM entrada 
                LEFT JOIN producto   
                ON entrada.producto_entrada=producto.id_producto
                ORDER BY id_entrada DESC;";
            foreach ($this->conn->query($sql) as $row){
                $this->n[]=$row;
            }
            //echo "hola";
                return $this->n;
                $this->conn=null;
    }

    public function mostrarSalida()
    {
        $sql="SELECT * FROM salida 
                LEFT JOIN producto   
                ON salida.producto_salida=producto.id_producto
                ORDER BY id_salida DESC;";
            foreach ($this->conn->query($sql) as $row){
                $this->n[]=$row;
            }
            //echo "hola";
                return $this->n;
                $this->conn=null;
    }
}
?>