<?php

class User {
        private $id;
        private $username;
        private $password;
        private $privilegio;

        public function getId(){
          return $this->id;
        }
      
        public function setId($id){
          $this->id = $id;
        }
      
        public function getusername(){
          return $this->username;
        }
      
        public function setusername($username){
          $this->username = $username;
        }
      
        public function getPassword(){
          return $this->password;
        }
      
        public function setPassword($password){
          $this->password = $password;
        }
      
        public function getPrivilegio(){
          return $this->privilegio;
        }
      
        public function setPrivilegio($privilegio){
          $this->privilegio = $privilegio;
        }
    }
    
?>