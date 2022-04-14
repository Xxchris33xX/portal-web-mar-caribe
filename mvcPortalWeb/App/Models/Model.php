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

    
    
}
