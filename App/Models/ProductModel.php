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

    /***********************************************
	*** Metodo para listar los productos activos ***
	************************************************/

    public function mostrarProducto(){
        $sql="SELECT * FROM producto  
            LEFT JOIN categoria 
            ON producto.categoria=categoria.id_categoria
            WHERE producto.estado ='1';";
        foreach ($this->conn->query($sql) as $row){
            $this->n[]=$row;
        }
        //echo "hola";
            return $this->n;
    }

    /*************************************************
	*** Metodo para listar los productos inactivos ***
	**************************************************/

    public function mostrarProductoInactivo(){
        $sql="SELECT P.id_producto,P.categoria,P.nom_producto,P.descripcion,P.imagen,P.precio,P.cantidad,P.estado,C.nom_categoria,C.id_categoria FROM producto AS P
        INNER JOIN categoria AS C
        ON  C.id_categoria = P.categoria
        WHERE P.estado ='0';";
        foreach ($this->conn->query($sql) as $row){
            $this->n[]=$row;
        }
        //echo "hola";
        echo json_encode($this->n,JSON_UNESCAPED_UNICODE);
    }

    /*******************************************************
	*** Metodo que retorna el total de productos activos ***
	********************************************************/

    public function totalProductos()
    {
        $sql="SELECT count(*) as total FROM producto WHERE producto.estado = '1';";
        $stmt = $this->conn->prepare ($sql);
        $stmt->execute();
        $row = $stmt->fetch();
        return $row;
    }

    /***********************************************************************
	*** Metodo para listar los productos activos con JSON para DataTable ***
	************************************************************************/

    public function mostrarProductoJSON(){
        $sql="SELECT * FROM producto  
            LEFT JOIN categoria 
            ON producto.categoria=categoria.id_categoria
            WHERE producto.estado ='1'
            ORDER BY id_producto DESC;";
        foreach ($this->conn->query($sql) as $row){
            $this->n[]=$row;
        }
        echo json_encode($this->n,JSON_UNESCAPED_UNICODE);
        
    }

    /*****************************************************************
	*** Metodo para listar 6 productos de una categoria especifica ***
	******************************************************************/

    public function mostrarProductoSimilar($categoria,$producto){
        $sql="SELECT * FROM producto  
            LEFT JOIN categoria 
            ON producto.categoria=categoria.id_categoria
            WHERE producto.estado='1' AND cantidad>'0'
            AND categoria=".$categoria." AND producto.id_producto != ".$producto."
            LIMIT 6;";
            $stmt = $this->conn->prepare ($sql);
        $stmt->execute();
        $row = $stmt->fetchAll();
        return $row;
        /*foreach ($this->conn->query($sql) as $row){
            $this->n[]=$row;
        }
        //echo "hola";
            return $this->n;*/
    }

    /**************************************************************************
	*** Metodo para listar los productos activos con una cantidad mayor a 0 ***
	***************************************************************************/

    public function mostrarTienda(){
        $sql="SELECT * FROM producto  
            LEFT JOIN categoria 
            ON producto.categoria=categoria.id_categoria
            WHERE cantidad>'0' AND producto.estado ='1';";
        foreach ($this->conn->query($sql) as $row){
            $this->n[]=$row;
        }
        //echo "hola";
            
            return $this->n;
            
    }

    /**************************************************************************************************************
	*** Metodo para listar los productos activos con una cantidad mayor a 0, filtrados por nombre y/o categoria ***
	***************************************************************************************************************/

    public function mostrarTiendaFiltrada($categoria,$nom_producto)
    {

        if(isset($categoria) or isset($nom_producto))
        {
            if(($categoria != "") && ($nom_producto != ""))
            {
                $sql="SELECT * FROM producto  
                LEFT JOIN categoria 
                ON producto.categoria=categoria.id_categoria
                WHERE cantidad>'0' AND producto.estado ='1' 
                AND categoria=".$categoria." AND nom_producto LIKE '".$nom_producto."%';";
                foreach ($this->conn->query($sql) as $row){
                $this->n[]=$row;
                }
                //echo "hola";
                return $this->n;
                
            }
            else if (($categoria != "") && ($nom_producto == ""))
            {
                
                $sql="SELECT * FROM producto  
                LEFT JOIN categoria 
                ON producto.categoria=categoria.id_categoria
                WHERE cantidad>'0' AND producto.estado ='1' AND categoria=".$categoria.";";
                foreach ($this->conn->query($sql) as $row){
                $this->n[]=$row;
                }
                //echo "hola";
                return $this->n;
                
            }
            else if (($categoria == "") && ($nom_producto != ""))
            {
                //print_r($nom_producto);
                $sql="SELECT * FROM producto  
                LEFT JOIN categoria 
                ON producto.categoria=categoria.id_categoria
                WHERE cantidad>'0' AND producto.estado ='1' AND nom_producto LIKE '".$nom_producto."%';";
                foreach ($this->conn->query($sql) as $row){
                $this->n[]=$row;
                }
                //echo "hola";
                return $this->n;
                
            }
            else
            header('Location: '. FOLDER_PATH .'/shop/exec/?m=1');
        }
    }

    /*******************************************************
	*** Metodo que retorna el ultimo producto registrado ***
	********************************************************/

    public function mostrarUltimoProducto(){
        $sql="SELECT nom_producto FROM producto WHERE estado ='1' ORDER BY id_producto DESC LIMIT 1;";
            $stmt = $this->conn->prepare ($sql);
            $stmt->execute();
            $row = $stmt->fetch();
            return $row;
            
    }
    
    /*****************************************************************************
	*** Metodo que lista las categorias con JSON para el modal editar producto ***
	******************************************************************************/
   
    public function mostrarCategoriaJSON(){
        $sql="SELECT * FROM categoria
        WHERE estado = '1'
        ORDER BY id_categoria DESC; " ;
        foreach ($this->conn->query($sql) as $row){
            $this->c[]=$row;
        }
        echo json_encode($this->c,JSON_UNESCAPED_UNICODE);
           // 
    }

    /******************************************
	*** Metodo para crear un nuevo producto ***
	*******************************************/

    public function insertarProducto(){
        parent::__construct();
        print_r($_POST);
        if(empty($_POST["Nom_producto"]) 
        or empty($_POST["Categoria"])
        or (($_FILES["Imagen"]['size'] ?? 0) == 0 )
        or empty($_POST["Cantidad"]) 
        or empty($_POST["Precio"]))
        {
            header('Location: '. FOLDER_PATH .'/reg_pro/exec/?m=1');
            exit;
        }
        else{
        
        if($_POST["Descripcion"] == ''){
            header('Location: '. FOLDER_PATH .'/reg_pro/exec/?m=1');
            exit;
        }

        $checkNameExist = "SELECT nom_producto 
        FROM producto
        WHERE Nom_producto = ?";

        $stmt = $this->conn->prepare($checkNameExist);
        $stmt -> bindValue(1,$_POST["Nom_producto"], PDO::PARAM_STR);
        $stmt -> execute();

        if($stmt->rowCount()>0){
            header('Location:'. FOLDER_PATH .'/reg_pro/exec/?m=5');
            exit;
        }
        
        $sql = "INSERT INTO producto VALUES (default,?,?,?,?,?,?,default);";
        $stmt = $this->conn->prepare ($sql);
        $stmt -> BindValue(1, $_POST["Categoria"], PDO::PARAM_STR);
        $stmt -> BindValue(2, $_POST["Nom_producto"], PDO::PARAM_STR);
        $stmt -> BindValue(3, $_POST["Descripcion"], PDO::PARAM_STR);

        $fileName = $_FILES["Imagen"]["name"];
        $tmpImagen = $_FILES["Imagen"]["tmp_name"];
        $uploads_dir = 'Assets/img/Productos';

        if(!file_exists($uploads_dir)){
            if(!mkdir($uploads_dir,0777)){
                echo "Error al crear el directorio";
                exit;
            }
            echo "no existe";
        }else{
            echo "existe";
        }
        chmod($uploads_dir,0777);

        if(move_uploaded_file($tmpImagen,"$uploads_dir/$fileName")){
            echo "Archivo subido con éxito";
        }else{
            echo "Error al subir el archivo";
        }

        $stmt -> BindValue(4, $_FILES["Imagen"]["name"], PDO::PARAM_STR);
        $stmt -> BindValue(5, $_POST["Precio"], PDO::PARAM_STR);
        $stmt -> BindValue(6, $_POST["Cantidad"], PDO::PARAM_STR);
        $stmt -> execute();
        parent::insertarHistorial($_SESSION['user']['id_usuario'],$_POST['Nom_producto'],$_POST['Mensaje']);
        }
    }

    /*************************************
	*** Metodo para editar un producto ***
    **************************************/

    public function editarProducto()
    {
        parent::__construct();
        print_r($_POST);
        print_r($_FILES['Imagen']['name']);
        if(empty($_POST["Nom_producto"])
        or empty($_POST["Precio"]))
        {
            header('Location: '. FOLDER_PATH .'/con_pro/exec/?m=1&id='.$_POST["id"]);
            exit;
        }
        else

        $checkNameExist = "SELECT nom_producto 
        FROM producto
        WHERE nom_producto = ? AND id_producto != ?";

        $stmt = $this->conn->prepare($checkNameExist);
        $stmt -> bindValue(1,$_POST["Nom_producto"], PDO::PARAM_STR);
        $stmt -> bindValue(2,$_POST["id"], PDO::PARAM_INT);
        $stmt -> execute();

        if($stmt->rowCount()>0){
            header('Location:'. FOLDER_PATH .'/con_pro/exec/?m=5');
            exit;
        }

         $sql="UPDATE producto
            SET
            nom_producto=?,
            precio=?,
            descripcion=?
            WHERE
            id_producto=?;
            ";
        $stmt = $this->conn->prepare ($sql);
        $stmt -> BindValue(1, $_POST["Nom_producto"], PDO::PARAM_STR);
        $stmt -> BindValue(2, $_POST["Precio"], PDO::PARAM_STR);
        $stmt -> BindValue(3, $_POST["Descripcion"], PDO::PARAM_STR);
        $stmt -> BindValue(4, $_POST["id"], PDO::PARAM_INT);
        $stmt -> execute();

        if (isset($_FILES["Imagen"]["name"]) or isset($_POST["Categoria"]))
        {
            if(($_FILES["Imagen"]["name"] != "") && ($_POST["Categoria"] != ""))
            {
                $fileName = $_FILES["Imagen"]["name"];
                $tmpImagen = $_FILES["Imagen"]["tmp_name"];
                $uploads_dir = 'Assets/img/Productos';

                if(!file_exists($uploads_dir)){
                    if(!mkdir($uploads_dir,0777)){
                        echo "Error al crear el directorio";
                        exit;
                    }
                    echo "no existe";
                }else{
                    echo "existe";
                }
                chmod($uploads_dir,0777);
        
                if(move_uploaded_file($tmpImagen,"$uploads_dir/$fileName")){
                    echo "Archivo subido con éxito";
                }else{
                    echo "Error al subir el archivo";
                }

                $sql1="UPDATE producto
                SET
                categoria=?,
                imagen=?
                WHERE
                id_producto=?;
                ";
                $stmt1 = $this->conn->prepare ($sql1);
                $stmt1 -> BindValue(1, $_POST["Categoria"], PDO::PARAM_STR);
                $stmt1 -> BindValue(2, $_FILES["Imagen"]["name"], PDO::PARAM_STR);
                $stmt1 -> BindValue(3, $_POST["id"], PDO::PARAM_INT);
                $stmt1 -> execute();
                parent::insertarHistorial($_SESSION['user']['id_usuario'],$_POST['Nom_producto'],$_POST['Mensaje']);
            }
            else if(($_FILES["Imagen"]["name"] != "") && ($_POST["Categoria"] == ""))
            {
                $fileName = $_FILES["Imagen"]["name"];
                $tmpImagen = $_FILES["Imagen"]["tmp_name"];
                $uploads_dir = 'Assets/img/Productos';

                $sql1="UPDATE producto
                SET
                imagen=?
                WHERE
                id_producto=?;
                ";
                $stmt1 = $this->conn->prepare ($sql1);
                $stmt1 -> BindValue(1, $_FILES["Imagen"]["name"], PDO::PARAM_STR);
                $stmt1 -> BindValue(2, $_POST["id"], PDO::PARAM_INT);
                $stmt1 -> execute();
                parent::insertarHistorial($_SESSION['user']['id_usuario'],$_POST['Nom_producto'],$_POST['Mensaje']);
            }
            else if(($_FILES["Imagen"]["name"] == "") && ($_POST["Categoria"] != ""))
            {
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
                parent::insertarHistorial($_SESSION['user']['id_usuario'],$_POST['Nom_producto'],$_POST['Mensaje']);
            }else
            parent::insertarHistorial($_SESSION['user']['id_usuario'],$_POST['Nom_producto'],$_POST['Mensaje']);
        }
    }

    /***************************************
	*** Metodo para eliminar un producto ***
    ****************************************/

    public function eliminarProducto($id)
    {
        parent::__construct();
        $sql="UPDATE producto SET estado ='0' WHERE id_producto=?";
        $stmt = $this->conn->prepare ($sql);
        $stmt ->BindParam(1,$id);
        $stmt -> execute();
        parent::insertarHistorial($_SESSION['user']['id_usuario'],$_GET['Nom_producto'],$_GET['Mensaje']);
    }

    /**************************************************
	*** Metodo para activar un producto desactivado ***
	***************************************************/

    public function activarProducto($id)
    {
        parent::__construct();
        $sql="UPDATE producto SET estado ='1' WHERE id_producto=?";
        $stmt = $this->conn->prepare ($sql);
        $stmt ->BindParam(1,$id);
        $stmt -> execute();
        parent::insertarHistorial($_SESSION['user']['id_usuario'],$_GET['Nom_producto'],$_GET['Mensaje']);
    }

    /******************************************************
	*** Metodo para mostrar un producto unico por su id ***
	*******************************************************/

    public function mostrarProductoPorId($id){
        $sql="SELECT * FROM producto
        LEFT JOIN categoria 
        ON producto.categoria=categoria.id_categoria
        WHERE id_producto= ? AND producto.estado ='1'; ";
        $stmt = $this->conn->prepare ($sql);

        $stmt->execute(array($id));
           $row = $stmt->fetch();
            return $row;
            
    }

}


/******************************************************************
	*** Metodo para listar el historial de acciones de los usuarios ***
	*******************************************************************/

   /* public function mostrarUltimoIdProducto(){
        $sql="SELECT id_producto FROM producto WHERE estado ='1' ORDER BY id_producto DESC LIMIT 1;";
            $stmt = $this->conn->prepare ($sql);
            $stmt->execute();
            $row = $stmt->fetch();
            
            return $row;
    } */

    /* */
?>