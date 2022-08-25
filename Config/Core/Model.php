<?php

abstract class Model
{
    protected $conn;
    protected $n;
    
    public function __construct()
    {
        try {
            $this -> conn = new PDO (
            'mysql:host='.HOST.';
            dbname='.DB_NAME, 
            USER, 
            PASSWORD);
            $this -> n = array();
            //echo "Se conecto a la base de datos";
            }
        catch( PDOException $exp){
            echo ("No se logro conectar a la base de datos correctamente, $exp");
            }
    }    
    
    public function insertarHistorial($id_user,$entidad,$mensaje)
    {
        Model::__construct();
        $sql = "INSERT INTO historial VALUES (default,?,?,?,default);";
        $stmt = $this->conn->prepare ($sql);
        $stmt -> BindValue(1, $id_user, PDO::PARAM_INT);
        $stmt -> BindValue(2, $mensaje, PDO::PARAM_STR);
        $stmt -> BindValue(3, $entidad, PDO::PARAM_STR);
        $stmt -> execute();
    }

    public function cerrarConexion()
    {
        $this->conn=null;
    }
}
