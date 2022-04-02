<?php

    class User extends Database{
        
        public function getUser($username,$password){
            $Auth = "SELECT * FROM User WHERE username = '$username' AND password = '$password'";
            
            $Result = $this->conectar()->query($Auth);

            $numRows = $Result->num_rows;
            if($numRows == 1){
                return true;
            }else{
                return false;
            }
        }
    }

?>