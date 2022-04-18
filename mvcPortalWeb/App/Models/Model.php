<?php

abstract class Model
{
    protected $conn;
    protected $n;
    
    public function __construct()
    {
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

    public function createLog($id)
    {
        $sql1 = "INSERT INTO historial VALUES (default,?,default,?,?,
        (SELECT id_categoria FROM categoria ORDER BY id_categoria DESC LIMIT 1));";
        $stmt1 = $this->conn->prepare ($sql1);
        $stmt1 -> BindValue(1, $id, PDO::PARAM_INT);
        $stmt1 -> BindValue(2, $_POST["accion"], PDO::PARAM_INT);
        $stmt1 -> BindValue(3, $_POST["entidad"], PDO::PARAM_INT);
        $stmt1 -> execute();
    }
    
    
}
