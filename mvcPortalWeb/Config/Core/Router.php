<?php
class Router
{
    public $uri;
    public $controller;
    public $method;
    public $param;
    public function __construct()
    {
        $this ->setUri();
        $this ->setController();
        $this ->setMethod();
        $this ->setParam();
    }
    
    public function setUri()
    {
        $this -> uri = explode('/', URI);
    }

    public function setController()
    {
        $this -> controller = $this->uri[4] === '' ? 'Home' : $this -> uri[4];
    }

    public function setMethod()
    {
        $this -> method = !empty($this -> uri[5]) ? $this -> uri[5] : 'exec';
    }

    public function setParam()
    {
        $this -> param = !empty($this -> uri[6]) ? $this -> uri[6] : '';
    }

    public function getUri()
    {
        return $this -> uri;
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