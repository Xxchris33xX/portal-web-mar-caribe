<?php
spl_autoload_register(function($clase)
{
    if (is_file(CORE. "$clase.php"))
    {
        require CORE. "$clase.php";
    }else{
        echo "No se encontro $clase.php";
    }
});

?>