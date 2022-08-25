<?php
defined('BASEPATH') or exit('No se permite acceso directo');

/**
* 
*/
class CoreHelper
{
  public static function validateController($controlador)
  {
    if(!is_file(PATH_CONTROLLERS . "{}/{$controlador}Controller.php"))
      return false;
    return true;
  }

  public static function validateMethodController($controlador, $metodo)
  {
    if(!method_exists($controlador, $metodo))
      return false;
    return true;
  }
}