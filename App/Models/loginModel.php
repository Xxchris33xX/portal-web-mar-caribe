<?php
    include CORE .  'User.php';
    class usuarioDao extends Model
    {
        protected static $conexion;
        public static function getConexion(){
            //self::$conexion = parent::__construct();
            self::$conexion = Database::Conectar();
        }
        private static function disconect() {
            self::$conexion = null;
        }

        /*** 
         * Método para validar el login
         * @param  object $user
         * @return boolean
        */
        

        public static function login(User $user)
        {
            $query = "SELECT * FROM usuario WHERE nom_usuario = :usuario AND contrasenia = :contrasenia AND usuario.estado = '1'";
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->bindValue(":usuario",$user->getusername());
            $resultado->bindValue(":contrasenia",$user->getPassword());
            $resultado->execute();

            if($resultado->rowCount() > 0){
              $filas = $resultado->fetch();
              if($filas["nom_usuario"]==$user->getusername()
              && $filas["contrasenia"]==$user->getPassword())
              {
                $sql = "INSERT INTO historial_sesion VALUES (default,?,default);";
                $stmt = self::$conexion->prepare ($sql);
                $stmt -> BindValue(1, $filas["id_usuario"], PDO::PARAM_INT);
                $stmt -> execute();
                return true;
              }
            }else{
                return false;
            }

            
        }
         /*** 
         * Método para obtener datos de usuarios
         * @param  object $user
         * @return boolean
        */
        public static function getUser($user)
        {
            $query = "SELECT id_usuario, 
            nom_usuario, 
            rol_usuario 
            FROM usuario 
            WHERE nom_usuario = :usuario 
            AND contrasenia = :contrasenia
            AND usuario.estado = '1'";
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->bindValue(":usuario",$user->getusername());
            $resultado->bindValue(":contrasenia",$user->getPassword());
            $resultado->execute();

            $filas = $resultado->fetch();

            $user = new User();
            $user->setId($filas["id_usuario"]);
            $user->setusername($filas["nom_usuario"]);
            $user->setPrivilegio($filas["rol_usuario"]);

            

            return $user;
        }
    }

?>