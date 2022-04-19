<?php
class Router
{
    public $uri;
    public $folder;
    public $controller;
    public $method;
    public $param;

    public function __construct()
    {
        $this ->setUri();
        $this ->setFolder();
        $this ->setController($this -> folder);
        $this ->setMethod();
        $this ->setParam();
    }
    
    public function setUri()
    {
        $this -> uri = explode('/', URI);
    }

    public function setFolder()
    {
        $this -> folder = $this -> uri[4] === '' ? 'catalogo' : $this -> uri[4];
    }

    public function setController()
    {
        switch($this -> folder)
        {
            case 'catalogo':
            $this -> controller = $this -> uri[5] === '' ? 'homepage' : $this -> uri[5];
            break;
            case 'sistema':
            $this -> controller = $this -> uri[5] === '' ? 'login' : $this -> uri[5];
            break;
        }
            
        
    }

    public function setMethod()
    {
        $this -> method = !empty($this -> uri[6]) ? $this -> uri[6] : 'exec';
    }

    public function setParam()
    {
        $this -> param = !empty($this -> uri[7]) ? $this -> uri[7] : '';
    }

    public function getUri()
    {
        return $this -> uri;
    }

    public function getFolder()
    {
        return $this -> folder;
    }

    public function getController()
    {
        return $this -> controller;
    }

    public function getMethod()
    {
        return $this -> method;
    }

    public function getParam()
    {
        return $this -> param;
    }
}
?>