<?php
class loginModel extends Model
{
    public function __construct()
    {
       parent::__construct();
    }

    public function createLogin()
    {

        $sql = "INSERT INTO logins VALUES (default, ? ,default);";
        $stmt = $this->conn->prepare ($sql);
        $stmt -> BindValue(1, $_SESSION["user"]["id_usuario"], PDO::PARAM_INT);
        $stmt -> execute();
        $this->conn=null;
    }
}
