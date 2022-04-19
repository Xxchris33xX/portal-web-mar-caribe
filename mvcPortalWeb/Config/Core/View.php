<?php
class View
{
    protected $template;
    protected $controller_name;
    protected $folder_name;
    protected $params;
    
    public function __construct($folder_name,$controller_name, $params = array())
    {
        $this -> folder_name = $folder_name;
        $this -> controller_name = $controller_name;
        $this -> params = $params;
        $this -> render();
    }

    protected function render()
    {
        if(class_exists($this->controller_name))
        {
            $file_name = str_replace('Controller', '', $this -> controller_name);
            $this-> template = $this -> getContentTemplate($this -> folder_name,$file_name);
            echo $this->template;
        }else{
            throw new Exception ("Error no existe {$this->controller_name}");
        }
    }

    protected function getContentTemplate($folder_name, $file_name)
    {
        $file_path = ROOT . '/' . PATH_VIEWS . "$folder_name/$file_name" . '.php';
        if(is_file($file_path))
        {
            extract($this->params);
            ob_start();
            require ($file_path);
            $template = ob_get_contents();
            ob_end_clean();
            return $template;
        }else{
            throw new Exception ("Error no existe {$file_path}");
        }
    }
}
