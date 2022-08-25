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

    /******************************************************************
	*** Metodo que retorna la cantidad en inventario de un producto ***
	*******************************************************************/

    public function cantidad($id)
    {
        parent::__construct();
        $sql="SELECT cantidad FROM producto
        LEFT JOIN categoria 
        ON producto.categoria=categoria.id_categoria
        WHERE id_producto= ?; ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($id));
        $row = $stmt->fetch();
        return $row;
    }

    /***************************************************************************
	*** Metodo que retorna el resultado de la suma de la entrada de producto ***
	****************************************************************************/
    
    public function entrada($number1,$index)
    {          
        //print_r($_POST);
        
        $sql2 = "INSERT INTO entrada VALUES (default,?,?,default);";
        $stmt2 = $this->conn->prepare ($sql2);
        $stmt2 -> BindValue(1, $_POST['idProducto'][$index], PDO::PARAM_INT);
        $stmt2 -> BindValue(2, $_POST['cantidad'][$index], PDO::PARAM_STR);
        $stmt2 -> execute();
        return  $this -> result = $number1 + $_POST['cantidad'][$index];
    }

    /***************************************************************************
	*** Metodo que retorna el resultado de la resta de la salida de producto ***
	****************************************************************************/

    public function salida(int $number1, int $index)
    {
        $this -> result = $number1 - $_POST["cantidad"][$index];
        $sql2 = "INSERT INTO salida VALUES (default,?,?,default);";
        $stmt2 = $this->conn->prepare($sql2);
        $stmt2 -> BindValue(1, $_POST["idProducto"][$index], PDO::PARAM_INT);
        $stmt2 -> BindValue(2, $_POST["cantidad"][$index], PDO::PARAM_STR);
        $stmt2 -> execute(); 
        return  $this -> result;
    }

    /**********************************************************************
	*** Metodo que edita la cantidad del producto con la nueva cantidad ***
	***********************************************************************/

    public function editInventory($resultado,$index)
    {
        $sql1="UPDATE producto
            SET
            cantidad=?
            WHERE
            id_producto=?;
            ";
        $stmt1 = $this->conn->prepare ($sql1);
        $stmt1 -> BindValue(1, $resultado, PDO::PARAM_STR);
        $stmt1 -> BindValue(2, $_POST['idProducto'][$index], PDO::PARAM_INT);
        $stmt1 -> execute();
    }

    

    /***************************************************************************************
	*** Metodo para listar los registros de entrada de productos con JSON para DataTable ***
	****************************************************************************************/

    public function mostrarEntradaJSON()
    {
            $sql="SELECT id_entrada, producto.nom_producto, cantidad_entrada, 
            DATE_FORMAT(creado_en, '%d-%m-%Y') as fecha, TIME_FORMAT(creado_en, '%h:%i %p') as hora
            FROM entrada 
                LEFT JOIN producto   
                ON entrada.id_producto=producto.id_producto
                ORDER BY id_entrada DESC;";
            foreach ($this->conn->query($sql) as $row){
                $this->n[]=$row;
            }
            //echo "hola";
                echo json_encode($this->n,JSON_UNESCAPED_UNICODE);
                
    }

    /**************************************************************************************
	*** Metodo para listar los registros de salida de productos con JSON para DataTable ***
	***************************************************************************************/

    public function mostrarSalidaJSON()
    {
        $sql="SELECT id_salida, producto.nom_producto, cantidad_salida, 
        DATE_FORMAT(creado_en, '%d-%m-%Y') as fecha, TIME_FORMAT(creado_en, '%h:%i %p') as hora
        FROM salida 
            LEFT JOIN producto   
            ON salida.id_producto=producto.id_producto
            ORDER BY id_salida DESC;";
            foreach ($this->conn->query($sql) as $row){
                $this->n[]=$row;
            }
            //echo "hola";
                echo json_encode($this->n,JSON_UNESCAPED_UNICODE);
                
    }

    /*****************************************************
	*** Metodo que retorna la ultima entrada realizada ***
	******************************************************/

    public function mostrarUltimaEntrada(){
            $sql="SELECT nom_producto, cantidad_entrada FROM entrada
            LEFT JOIN producto   
            ON entrada.id_producto=producto.id_producto
            ORDER BY id_entrada DESC LIMIT 1;";
            $stmt = $this->conn->prepare ($sql);
            $stmt->execute();
            $row = $stmt->fetch();
            return $row;
    }

    /****************************************************
	*** Metodo que retorna la ultima salida realizada ***
	*****************************************************/

    public function mostrarUltimaSalida(){
        $sql="SELECT nom_producto, cantidad_salida FROM salida
            LEFT JOIN producto   
            ON salida.id_producto=producto.id_producto
            ORDER BY id_salida DESC LIMIT 1;";
            $stmt = $this->conn->prepare ($sql);
            $stmt->execute();
            $row = $stmt->fetch();
            
            return $row;
    }
}

/***************************************************************
	*** Metodo para listar los registros de entrada de productos ***
	****************************************************************/

  /*  public function mostrarEntrada()
    {
            $sql="SELECT id_entrada, entrada.id_producto, cantidad_entrada, 
            DATE(creado_en) as fecha, TIME_FORMAT(creado_en, '%r') as hora
            FROM entrada 
                LEFT JOIN producto   
                ON entrada.id_producto=producto.id_producto
                ORDER BY id_entrada DESC;";
            foreach ($this->conn->query($sql) as $row){
                $this->n[]=$row;
            }
            //echo "hola";
                return $this->n;
                
    } */

/* public function mostrarSalida()
    {
        $sql="SELECT * FROM salida 
                LEFT JOIN producto   
                ON salida.id_producto=producto.id_producto
                ORDER BY id_salida DESC;";
            foreach ($this->conn->query($sql) as $row){
                $this->n[]=$row;
            }
            //echo "hola";
                return $this->n;
                
    }*/
?>