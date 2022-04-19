<?php
defined('BASEPATH') or exit('No se permite acceso directo');
///////////////////////////////////////
// VALORES URI
///////////////////////////////////////
define('URI', $_SERVER['REQUEST_URI']);

//////////////////////////////////////
// Valores de RUTAS
/////////////////////////////////////

define('FOLDER_PATH', '/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb');
define ('PATH_CONTROLLERS', 'App/Controllers/');
define ('PATH_MODELS', '/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/App/Models/');
define ('PATH_ASSETS', '/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/');
define ('PATH_VIEWS', 'Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/App/Views/');
define ('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('HELPER_PATH', 'Config/helpers/');

//////////////////////////////////////
// Valores de CORE
/////////////////////////////////////

define ('CORE', 'Config/Core/');

//////////////////////////////////////
// Valores de base de datos
/////////////////////////////////////

define('HOST', 'localhost');
define('USER', 'admin');
define('PASSWORD', 'admin');
define('DB_NAME', 'TiendaMarCaribeCenter');

/*
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('DB_NAME', 'tiendamarcaribecenter');
*/

//////////////////////////////////////
// Valores configuracion
/////////////////////////////////////

define('ERROR_REPORTING_LEVEL', -1);


?>