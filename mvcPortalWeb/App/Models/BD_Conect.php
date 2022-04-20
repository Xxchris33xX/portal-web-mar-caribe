<?php 

    /*class Database{

        private $db_host;
        private $db_name;
        private $db_user;
        private $db_password ;
        private $db_characters;

        public function conectar(){
            $this->db_host = "localhost";
            $this->db_name = "login";
            $this->db_user= "root";
            $this->db_password = "root";
            $this->db_characters = "utf8";
            try{
                $dsn = "mysql:host".$this->db_host.";dbname=".$this->db_name.";charset=".$this->db_characters;
                $pdo = new PDO($dsn,$this->db_user,$this->db_password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            }catch(PDOException $excepcion){
                echo "Conexión fallida. Causa: ";
                print_r($excepcion->getMessage());
            }
        }
        function getDb_nombre(){
            return $this->db_name;
        }
    }*/

    /** 
    * Conexión a la base de datos
    * @return PDO
    */

    Class Database{

        public static function Conectar(){
            try {
                $conexion = new PDO('mysql:host='.HOST.';dbname='.DB_NAME,USER,PASSWORD);
                return $conexion;
                echo 'conectó';
            }catch (PDOException $ex){
                die($ex->getMessage());
            }
        }
    }


?>