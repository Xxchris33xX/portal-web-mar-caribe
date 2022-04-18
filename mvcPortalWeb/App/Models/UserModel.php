<?php
//print_r($_POST);
require_once 'Model.php';
class UserModel extends Model{

    private $r;

    public function __construct()
    {
        parent::__construct();
    }

    public function mostrarUsuario(){
        $sql="SELECT * FROM usuario 
            LEFT JOIN rol 
            ON usuario.rol_usuario=rol.id_rol
            LEFT JOIN estatus
            ON usuario.estatus=estatus.id_estatus
            RIGHT JOIN personal
            ON personal.usuario_personal=usuario.id_usuario";
        foreach ($this->conn->query($sql) as $row){
            $this->n[]=$row;
        }
            return $this->n;
            $this->conn=null;
    }

    public function getUser_por_id($id){
        $sql="SELECT * FROM usuario 
        LEFT JOIN rol 
        ON usuario.rol_usuario=rol.id_rol
        RIGHT JOIN personal
        ON personal.usuario_personal=usuario.id_usuario
        WHERE id_usuario= ?; ";
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

    public function get_rol(){
        $sql1="SELECT * FROM rol ; " ;
        foreach ($this->conn->query($sql1) as $row){
            $this->c[]=$row;
        }
            return $this->c;
            $this->conn=null;
    }

    public function insertarUsuario(){
        if(
        empty($_POST["Nombre"])
        or empty($_POST["Apellido"]) 
        or empty($_POST["Nom_usuario"]) 
        or empty($_POST["Cedula"]) 
        or empty($_POST["Estatus"]) 
        or empty($_POST["Contrasenia"]) 
        or empty($_POST["Contrasenia2"]) 
        or empty($_POST["Direccion"]) 
        or empty($_POST["Rol_usuario"]) 
        or ($_POST["Contrasenia"] !== $_POST["Contrasenia2"])
        )
        {
            header("location: ?m=1");
            exit;
        }
        else
        $sql = "INSERT INTO usuario VALUES (default,?,?,?,?);";
            $stmt = $this->conn->prepare ($sql);
            $stmt -> BindValue(1, $_POST["Nom_usuario"], PDO::PARAM_STR);
            $stmt -> BindValue(2, $_POST["Contrasenia"], PDO::PARAM_STR);
            $stmt -> BindValue(3, $_POST["Estatus"], PDO::PARAM_STR);
            $stmt -> BindValue(4, $_POST["Rol_usuario"], PDO::PARAM_STR);
            $stmt -> execute();

            $sql1 = "INSERT INTO personal 
            VALUES (default,
            (SELECT id_usuario FROM usuario ORDER BY id_usuario DESC LIMIT 1),
            ?,?,?,?);";
            $stmt1 = $this->conn->prepare ($sql1);
            $stmt1 -> BindValue(1, $_POST["Nombre"], PDO::PARAM_STR);
            $stmt1 -> BindValue(2, $_POST["Apellido"], PDO::PARAM_STR);
            $stmt1 -> BindValue(3, $_POST["Cedula"], PDO::PARAM_STR);
            $stmt1 -> BindValue(4, $_POST["Direccion"], PDO::PARAM_STR);
            $stmt1 -> execute();
            if ($_POST["Telefono"] !== ""){
                $sql2 = "INSERT INTO telefono VALUES (default,
                (SELECT id_usuario FROM usuario ORDER BY id_usuario DESC LIMIT 1)
                ,?);";
                $stmt2= $this->conn->prepare ($sql2);
                $stmt2 -> BindValue(1, $_POST["Telefono"], PDO::PARAM_STR);
                $stmt2 -> execute();
            }
            if ($_POST["Correo"] !== ""){
                $sql3 = "INSERT INTO correo_electronico VALUES (default,
                (SELECT id_usuario FROM usuario ORDER BY id_usuario DESC LIMIT 1)
                ,?);";
                $stmt3= $this->conn->prepare ($sql3);
                $stmt3 -> BindValue(1, $_POST["Correo"], PDO::PARAM_STR);
                $stmt3 -> execute();
                }
                $this->conn=null;
                header("location: ?m=2");
        
        }
    public function editarUsuario(){
        print_r($_POST);
        if(empty($_POST["Estatus"]) 
        or empty($_POST["Contrasenia"]) 
        or empty($_POST["Nom_usuario"]) 
        or empty($_POST["Tipo_de_usuario"])){
            header("location: ?m=1&id=".$_POST["id"]);
            exit;
        }
        else
         $sql="UPDATE usuario
            SET
            estatus=?,
            contrasenia=?,
            nom_usuario=?,
            tipo_de_usuario=?
            WHERE
            id_usuario=?;
            ";
        $stmt = $this->conn->prepare ($sql);
        $stmt -> BindValue(1, $_POST["Estatus"], PDO::PARAM_STR);
        $stmt -> BindValue(2, $_POST["Contrasenia"], PDO::PARAM_STR);
        $stmt -> BindValue(3, $_POST["Nom_usuario"], PDO::PARAM_STR);
        $stmt -> BindValue(4, $_POST["Tipo_de_usuario"], PDO::PARAM_LOB);
        $stmt -> BindValue(7, $_POST["id"], PDO::PARAM_INT);
        
        $stmt -> execute();
        $this->conn=null;
        header("location: ?m=2&id=".$_POST["id"]);
    }

    public function eliminarUsuario($id){
        $sql="UPDATE usuario SET estatus='0' WHERE id_usuario=?";
        $stmt = $this->conn->prepare ($sql);
        $stmt ->BindParam(1,$id);
        $stmt -> execute();
        $this->conn=null;
        header("location: ../Controllers/Sistema/con-userController.php?m=4");
    }

}
?>