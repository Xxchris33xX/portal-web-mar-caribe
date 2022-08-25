<?php
//print_r($_POST);
class UserModel extends Model{

    private $r;

    public function __construct()
    {
        parent::__construct();
    }

   /**************************************************************
	*** Metodo que retorna el numero total de usuarios activos ***
	**************************************************************/

    public function totalUsuarios()
    {
        $sql="SELECT count(*) as total FROM usuario WHERE estado='1';";
        $stmt = $this->conn->prepare ($sql);
        $stmt->execute();
        $row = $stmt->fetch();
        return $row;
    }

    /**********************************************************************
	*** Metodo para listar los usuarios activos con JSON para DataTable ***
	***********************************************************************/

    public function mostrarUsuarioJSON(){
        $sql="SELECT * FROM usuario 
        LEFT JOIN rol 
        ON usuario.rol_usuario=rol.id_rol
        RIGHT JOIN personal
        ON personal.id_usuario=usuario.id_usuario
        LEFT JOIN correo
        ON personal.id_personal=correo.id_personal
        LEFT JOIN telefono
        ON personal.id_personal=telefono.id_personal
            WHERE usuario.estado ='1';";
        foreach ($this->conn->query($sql) as $row){
            $this->n[]=$row;
        }
            echo json_encode($this->n,JSON_UNESCAPED_UNICODE);
            
    }

    /*************************************************************************
	*** Metodo parar listar los usuarios inactivos con JSON para DataTable ***
	**************************************************************************/

    public function mostrarUsuarioInactivoJSON(){
        $sql="SELECT * FROM usuario 
        LEFT JOIN rol 
        ON usuario.rol_usuario=rol.id_rol
        RIGHT JOIN personal
        ON personal.id_usuario=usuario.id_usuario
        LEFT JOIN correo
        ON personal.id_personal=correo.id_personal
        LEFT JOIN telefono
        ON personal.id_personal=telefono.id_personal
            WHERE usuario.estado ='0';";
        foreach ($this->conn->query($sql) as $row){
            $this->n[]=$row;
        }
            echo json_encode($this->n,JSON_UNESCAPED_UNICODE);
            
    }

    /**********************************************
	*** Metodo que retorna un usuario por su ID ***
	***********************************************/

    public function mostrarUsuarioPorId($id){
        $sql="SELECT * FROM usuario 
        LEFT JOIN rol 
        ON usuario.rol_usuario=rol.id_rol
        RIGHT JOIN personal
        ON personal.id_usuario=usuario.id_usuario
        WHERE usuario.id_usuario= ? AND usuario.estado ='1';";
        $stmt = $this->conn->prepare ($sql);

        if ($stmt->execute(array($id) ))
        {
           while($row = $stmt->fetch())
           {
            $this->n[]=$row;
            }
        }
            return $this->n;
    }

    /*****************************************
	*** Metodo para crear un nuevo usuario ***
	******************************************/

    public function insertarUsuario(){
        parent::__construct();
        if(
        empty($_POST["Nombre"])
        or empty($_POST["Apellido"]) 
        or empty($_POST["Nom_usuario"]) 
        or empty($_POST["Cedula"]) 
        or empty($_POST["Contrasenia"]) 
        or empty($_POST["Contrasenia2"]) 
        or empty($_POST["Direccion"]) 
        or ($_POST["Contrasenia"] !== $_POST["Contrasenia2"])
        )
        {
            header('Location: '. FOLDER_PATH .'/reg_user/exec/?m=1');
            exit;
        }
        else{

        $checkNameExist = "SELECT nom_usuario 
        FROM usuario
        WHERE nom_usuario = ?";

        $stmt = $this->conn->prepare($checkNameExist);
        $stmt -> bindValue(1,$_POST["Nom_usuario"], PDO::PARAM_STR);
        $stmt -> execute();

        if($stmt->rowCount()>0){
            header('Location:'. FOLDER_PATH .'/reg_user/exec/?m=5');
            exit;
        }

        $checkIDExist = "SELECT cedula 
        FROM personal
        WHERE cedula = ?";

        $stmt = $this->conn->prepare($checkIDExist);
        $stmt -> bindValue(1,$_POST["Cedula"], PDO::PARAM_STR);
        $stmt -> execute();

        if($stmt->rowCount()>0){
            header('Location:'. FOLDER_PATH .'/reg_user/exec/?m=6');
            exit;
        }

        
        if($_POST["Correo"] !== ""){
            if(!preg_match('/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/',$_POST["Correo"])){
                header('Location:'. FOLDER_PATH .'/reg_user/exec/?m=7');
                exit;
            }
        }    
        $sql = "INSERT INTO usuario VALUES (default,default,?,?,default);";
            $stmt = $this->conn->prepare ($sql);
            $stmt -> BindValue(1, $_POST["Nom_usuario"], PDO::PARAM_STR);
            $stmt -> BindValue(2, $_POST["Contrasenia"], PDO::PARAM_STR);
            $stmt -> execute();

            $sql1 = "INSERT INTO personal 
            VALUES (default,
            (SELECT id_usuario FROM usuario ORDER BY id_usuario DESC LIMIT 1),
            ?,?,?,?,default);";
            $stmt1 = $this->conn->prepare ($sql1);
            $stmt1 -> BindValue(1, $_POST["Nombre"], PDO::PARAM_STR);
            $stmt1 -> BindValue(2, $_POST["Apellido"], PDO::PARAM_STR);
            $stmt1 -> BindValue(3, $_POST["Cedula"], PDO::PARAM_STR);
            $stmt1 -> BindValue(4, $_POST["Direccion"], PDO::PARAM_STR);
            $stmt1 -> execute();
            if ($_POST["Telefono"] !== ""){
                $sql2 = "INSERT INTO telefono VALUES (default,
                (SELECT id_usuario FROM usuario ORDER BY id_usuario DESC LIMIT 1)
                ,?,default);";
                $stmt2= $this->conn->prepare ($sql2);
                $stmt2 -> BindValue(1, $_POST["Telefono"], PDO::PARAM_STR);
                $stmt2 -> execute();
            }
            if ($_POST["Correo"] !== ""){
                $sql3 = "INSERT INTO correo VALUES (default,
                (SELECT id_usuario FROM usuario ORDER BY id_usuario DESC LIMIT 1)
                ,?,default);";
                $stmt3= $this->conn->prepare ($sql3);
                $stmt3 -> BindValue(1, $_POST["Correo"], PDO::PARAM_STR);
                $stmt3 -> execute();
                }
                
                parent::insertarHistorial($_SESSION['user']['id_usuario'],$_POST['Nom_usuario'],$_POST['Mensaje']);
        }
    }

    /********************************************************
	*** Metodo para editar el usuario actual de la sesión ***
	*********************************************************/

    public function editarUsuarioSesion($id)
    {
        parent::__construct();
        //print_r($_POST);
        if(
            empty($_POST["Nombre"])
            or empty($_POST["Apellido"]) 
            or empty($_POST["Nom_usuario"]) 
            or empty($_POST["Cedula"]) 
            or empty($_POST["Direccion"]) 
        )
        {
            header('Location: '. FOLDER_PATH .'/log_edit/exec/?m=1');
            exit;
        }
        else{

        $checkNameExist = "SELECT nom_usuario 
        FROM usuario
        WHERE nom_usuario = ? AND id_usuario != ?";

        $stmt = $this->conn->prepare($checkNameExist);
        $stmt -> bindValue(1,$_POST["Nom_usuario"], PDO::PARAM_STR);
        $stmt -> bindValue(2,$id, PDO::PARAM_INT);
        
        $stmt -> execute();

        if($stmt->rowCount()>0){
            header('Location:'. FOLDER_PATH .'/log_edit/exec/?m=5');
            exit;
        }
        

         $sql="UPDATE usuario
            SET
            nom_usuario=?
            WHERE
            id_usuario=?;
            ";
        $stmt = $this->conn->prepare ($sql);
        $stmt -> BindValue(1, $_POST["Nom_usuario"], PDO::PARAM_STR);
        $stmt -> BindValue(2, $id, PDO::PARAM_INT);
        $stmt -> execute();

        $sql1 = "UPDATE personal 
            SET
            nombre=?,
            apellido=?,
            cedula=?,
            direccion=?
            WHERE
            personal.id_usuario=?;
            ";
            $stmt1 = $this->conn->prepare ($sql1);
            $stmt1 -> BindValue(1, $_POST["Nombre"], PDO::PARAM_STR);
            $stmt1 -> BindValue(2, $_POST["Apellido"], PDO::PARAM_STR);
            $stmt1 -> BindValue(3, $_POST["Cedula"], PDO::PARAM_STR);
            $stmt1 -> BindValue(4, $_POST["Direccion"], PDO::PARAM_STR);
            $stmt1 -> BindValue(5, $id, PDO::PARAM_INT);
            $stmt1 -> execute();
            if ($_POST["Telefono"] !== ""){
                $sql2 = "UPDATE telefono 
                SET
                telefono=?
                WHERE
                telefono.id_personal=?;
                ";
                $stmt2= $this->conn->prepare ($sql2);
                $stmt2 -> BindValue(1, $_POST["Telefono"], PDO::PARAM_STR);
                $stmt2 -> BindValue(2, $id, PDO::PARAM_INT);
                $stmt2 -> execute();
            }
            if ($_POST["Correo"] !== ""){
                $sql3 = "UPDATE correo
                SET
                correo=?
                WHERE
                correo.id_personal=?;
                ";
                $stmt3= $this->conn->prepare ($sql3);
                $stmt3 -> BindValue(1, $_POST["Correo"], PDO::PARAM_STR);
                $stmt3 -> BindValue(2, $id, PDO::PARAM_INT);
                $stmt3 -> execute();
                }
            
            parent::insertarHistorial($_SESSION['user']['id_usuario'],$_POST['NomUsuario'],$_POST['mensaje']);
            header('Location: '. FOLDER_PATH .'/log_edit/exec/?m=2');
        }
    }

    /***********************************************************************
	*** Metodo para editar la contrasela del usuario actual de la sesión ***
    ************************************************************************/
    
    public function editarContraseniaSesion($id)
    {
        parent::__construct();
        if(($_POST["Contrasenia"] !== $_POST["Contrasenia2"])
        or empty($_POST["Contrasenia"]) 
        or empty($_POST["Contrasenia2"]) 
        or empty($_POST["ContraseniaActual"])
        ){
            header('Location: '. FOLDER_PATH .'/log_edit/exec/?m=1');
            exit;
        }else{  
            $sql = "SELECT *
            FROM usuario
            WHERE id_usuario = ? AND contrasenia = ? "; 
            $stmt = $this->conn->prepare($sql);
            $stmt-> BindValue(1,$id,PDO::PARAM_STR);
            $stmt-> BindValue(2,$_POST["ContraseniaActual"],PDO::PARAM_STR);
            $stmt->execute();
            if($stmt->rowCount() > 0 ){
                
                if(!(preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/',$_POST["Contrasenia"]))){
                    header('Location: '. FOLDER_PATH .'/log_edit/exec/?m=7');
                    exit;
                }   
                $sql2 ="UPDATE usuario
                SET contrasenia = ?
                WHERE id_usuario = ?";  
                $stmt2 = $this->conn->prepare($sql2);
                $stmt2->BindValue(1,$_POST['Contrasenia'],PDO::PARAM_STR);
                $stmt2->BindValue(2,$id,PDO::PARAM_STR);
                $stmt2->execute();  
                parent::insertarHistorial($_SESSION['user']['id_usuario'],$_POST['NomUsuario'],$_POST['mensaje']);
                header('Location: '. FOLDER_PATH .'/log_edit/exec/?m=2');
            }else{
                header('Location: '. FOLDER_PATH .'/log_edit/exec/?m=3');
                exit;
            }
            
        }   
    }


    /*****************************************************
	*** Metodo para editar usuarios como administrador ***
	******************************************************/

    public function editarUsuario($id)
    {
        parent::__construct();
        //print_r($_POST);
        if(
            empty($_POST["Nombre"])
            or empty($_POST["Apellido"]) 
            or empty($_POST["Nom_usuario"]) 
            or empty($_POST["Cedula"]) 
            or empty($_POST["Contrasenia"]) 
            or empty($_POST["Contrasenia2"]) 
            or empty($_POST["Direccion"]) 
            or ($_POST["Contrasenia"] !== $_POST["Contrasenia2"])
        )
        {
            header('Location: '. FOLDER_PATH .'/log_edit/exec/?m=1');
            exit;
        }
        else{

        $checkNameExist = "SELECT nom_usuario 
        FROM usuario
        WHERE nom_usuario = ? AND id_usuario != ?";

        $stmt = $this->conn->prepare($checkNameExist);
        $stmt -> bindValue(1,$_POST["Nom_usuario"], PDO::PARAM_STR);
        $stmt -> bindValue(2,$_POST["id"], PDO::PARAM_INT);
        
        $stmt -> execute();

        if($stmt->rowCount()>0){
            header('Location:'. FOLDER_PATH .'/con_user/exec/?m=5');
            exit;
        }

         $sql="UPDATE usuario
            SET
            nom_usuario=?,
            contrasenia=?
            WHERE
            id_usuario=?;
            ";
        $stmt = $this->conn->prepare ($sql);
        $stmt -> BindValue(1, $_POST["Nom_usuario"], PDO::PARAM_STR);
        $stmt -> BindValue(2, $_POST["Contrasenia"], PDO::PARAM_STR);
        $stmt -> BindValue(3, $id, PDO::PARAM_INT);
        $stmt -> execute();

        $sql1 = "UPDATE personal 
            SET
            nombre=?,
            apellido=?,
            cedula=?,
            direccion=?
            WHERE
            personal.id_usuario=?;
            ";
            $stmt1 = $this->conn->prepare ($sql1);
            $stmt1 -> BindValue(1, $_POST["Nombre"], PDO::PARAM_STR);
            $stmt1 -> BindValue(2, $_POST["Apellido"], PDO::PARAM_STR);
            $stmt1 -> BindValue(3, $_POST["Cedula"], PDO::PARAM_STR);
            $stmt1 -> BindValue(4, $_POST["Direccion"], PDO::PARAM_STR);
            $stmt1 -> BindValue(5, $id, PDO::PARAM_INT);
            $stmt1 -> execute();

            if ($_POST["Telefono"] !== ""){

                $checkUserPhone = "SELECT id_telefono 
                FROM telefono
                WHERE id_personal = ?";

                $stmtPhone = $this->conn->prepare($checkUserPhone);
                $stmtPhone -> bindValue(1,$id, PDO::PARAM_INT);
                $stmtPhone -> execute();

                if($stmtPhone->rowCount()>0){
                $sqlUpdatePhone = "UPDATE telefono 
                SET
                telefono=?
                WHERE
                telefono.id_personal=?;
                ";
                $stmtUpdatePhone= $this->conn->prepare ($sqlUpdatePhone);
                $stmtUpdatePhone -> BindValue(1, $_POST["Telefono"], PDO::PARAM_STR);
                $stmtUpdatePhone -> BindValue(2, $id, PDO::PARAM_INT);
                $stmtUpdatePhone -> execute();
                ;
                }
                else{
                $sqlInsertPhone = "INSERT INTO telefono VALUES (default,?,?,default);";
                    $stmtInsertPhone= $this->conn->prepare ($sqlInsertPhone);
                    $stmtInsertPhone -> BindValue(1, $id, PDO::PARAM_INT);
                    $stmtInsertPhone -> BindValue(2, $_POST["Telefono"], PDO::PARAM_STR);
                    $stmtInsertPhone -> execute();
                }
            }

            if ($_POST["Correo"] !== ""){
                $checkUserEmail = "SELECT id_correo
                FROM correo
                WHERE id_personal = ?";

                $stmtEmail = $this->conn->prepare($checkUserEmail);
                $stmtEmail -> bindValue(1,$id, PDO::PARAM_INT);
                $stmtEmail -> execute();

                if($stmtEmail->rowCount()>0){
                    $sqlUpdateEmail = "UPDATE correo
                    SET
                    correo=?
                    WHERE
                    correo.id_personal=?;
                    ";
                    $stmtUpdateEmail = $this->conn->prepare ($sqlUpdateEmail);
                    $stmtUpdateEmail -> BindValue(1, $_POST["Correo"], PDO::PARAM_STR);
                    $stmtUpdateEmail -> BindValue(2, $id, PDO::PARAM_INT);
                    $stmtUpdateEmail -> execute();
                }
                else{
                $sqlInsertEmail = "INSERT INTO correo VALUES (default,?,?,default);";
                    $stmtInsertEmail = $this->conn->prepare ($sqlInsertEmail);
                    $stmtInsertEmail -> BindValue(1, $id, PDO::PARAM_INT);
                    $stmtInsertEmail -> BindValue(2, $_POST["Correo"], PDO::PARAM_STR);
                    $stmtInsertEmail -> execute();
                }
                }
                
                parent::insertarHistorial($_SESSION['user']['id_usuario'],$_POST['Nom_usuario'],$_POST['Mensaje']);
        }
    }

    /**************************************
	*** Metodo para desactivar usuarios ***
	***************************************/

    public function eliminarUsuario($id)
    {
        parent::__construct();
        $checkUserRole = "SELECT rol_usuario 
                FROM usuario
                WHERE id_usuario = ?";

                $stmtRole = $this->conn->prepare($checkUserRole);
                $stmtRole -> bindValue(1,$id, PDO::PARAM_INT);
                $stmtRole -> execute();
                $row = $stmtRole->fetch();

        if($row['rol_usuario'] == 1)
        {
            header('Location:'. FOLDER_PATH .'/con_user/exec/?m=8');
            exit;
        }
        
        else
        
        $sql="UPDATE usuario SET estado = '0' WHERE id_usuario=?";
        $stmt = $this->conn->prepare ($sql);
        $stmt ->BindParam(1,$id);
        $stmt -> execute();

        $sql1="UPDATE personal SET estado = '0' WHERE id_usuario=?";
        $stmt1 = $this->conn->prepare ($sql1);
        $stmt1 ->BindParam(1,$id);
        $stmt1 -> execute();

        $checkUserPhone = "SELECT id_telefono 
                FROM telefono
                WHERE id_personal = ?";

                $stmtPhone = $this->conn->prepare($checkUserPhone);
                $stmtPhone -> bindValue(1,$id, PDO::PARAM_INT);
                $stmtPhone -> execute();

                if($stmtPhone->rowCount()>0){
                $sqlUpdatePhone = "UPDATE telefono 
                SET
                estado='0'
                WHERE
                telefono.id_personal=?;
                ";
                $stmtUpdatePhone= $this->conn->prepare ($sqlUpdatePhone);
                $stmtUpdatePhone -> BindValue(1, $id, PDO::PARAM_INT);
                $stmtUpdatePhone -> execute();
                }

        $checkUserEmail = "SELECT id_correo
                FROM correo
                WHERE id_personal = ?";

                $stmtEmail = $this->conn->prepare($checkUserEmail);
                $stmtEmail -> bindValue(1,$id, PDO::PARAM_INT);
                $stmtEmail -> execute();

                if($stmtEmail->rowCount()>0){
                    $sqlUpdateEmail = "UPDATE correo
                    SET
                    estado= '0'
                    WHERE
                    correo.id_personal=?;
                    ";
                    $stmtUpdateEmail = $this->conn->prepare ($sqlUpdateEmail);
                    $stmtUpdateEmail -> BindValue(1, $id, PDO::PARAM_INT);
                    $stmtUpdateEmail -> execute();
                }
        
        parent::insertarHistorial($_SESSION['user']['id_usuario'],$_GET['Nom_usuario'],$_GET['Mensaje']);
    }

    /************************************************
	*** Metodo para activar usuarios desactivados ***
	*************************************************/

    public function activarUsuario($id)
    {
        parent::__construct();
        $sql="UPDATE usuario SET estado = '1' WHERE id_usuario=?";
        $stmt = $this->conn->prepare ($sql);
        $stmt ->BindParam(1,$id);
        $stmt -> execute();

        $sql1="UPDATE personal SET estado = '1' WHERE id_usuario=?";
        $stmt1 = $this->conn->prepare ($sql1);
        $stmt1 ->BindParam(1,$id);
        $stmt1 -> execute();

        $checkUserPhone = "SELECT id_telefono 
                FROM telefono
                WHERE id_personal = ?";

                $stmtPhone = $this->conn->prepare($checkUserPhone);
                $stmtPhone -> bindValue(1,$id, PDO::PARAM_INT);
                $stmtPhone -> execute();

                if($stmtPhone->rowCount()>0){
                $sqlUpdatePhone = "UPDATE telefono 
                SET
                estado='1'
                WHERE
                telefono.id_personal=?;
                ";
                $stmtUpdatePhone= $this->conn->prepare ($sqlUpdatePhone);
                $stmtUpdatePhone -> BindValue(1, $id, PDO::PARAM_INT);
                $stmtUpdatePhone -> execute();
                }

        $checkUserEmail = "SELECT id_correo
                FROM correo
                WHERE id_personal = ?";

                $stmtEmail = $this->conn->prepare($checkUserEmail);
                $stmtEmail -> bindValue(1,$id, PDO::PARAM_INT);
                $stmtEmail -> execute();

                if($stmtEmail->rowCount()>0){
                    $sqlUpdateEmail = "UPDATE correo
                    SET
                    estado= '1'
                    WHERE
                    correo.id_personal=?;
                    ";
                    $stmtUpdateEmail = $this->conn->prepare ($sqlUpdateEmail);
                    $stmtUpdateEmail -> BindValue(1, $id, PDO::PARAM_INT);
                    $stmtUpdateEmail -> execute();
                }

        parent::insertarHistorial($_SESSION['user']['id_usuario'],$_GET['Nom_usuario'],$_GET['Mensaje']);
    }

}

/* public function mostrarUsuario(){
        $sql="SELECT * FROM usuario 
            LEFT JOIN rol 
            ON usuario.rol_usuario=rol.id_rol
            RIGHT JOIN personal
            ON personal.id_usuario=usuario.id_usuario
            RIGHT JOIN correo
            ON correo.id_personal=personal.id_personal;
            WHERE usuario.estado ='1';";
        foreach ($this->conn->query($sql) as $row){
            $this->n[]=$row;
        }
            return $this->n;
            
    } */

     /* public function mostrarRol(){
        $sql1="SELECT * FROM rol ; " ;
        foreach ($this->conn->query($sql1) as $row){
            $this->c[]=$row;
        }
            return $this->c;
            
    } */
?>