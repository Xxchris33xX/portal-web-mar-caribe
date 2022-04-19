<?php



abstract class Controller

{
    private $view;
    
    public function __construct()
    {
        //echo __CLASS__  .  ' instanciada';
    }

    protected function render($folder_name, $controller_name = '', $params = array ())
    {
        $this->view = new View ($folder_name, $controller_name, $params);
    }
    
    abstract function exec($param);
    
}
?>