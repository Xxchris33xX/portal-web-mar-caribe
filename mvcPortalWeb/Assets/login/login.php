<?php 
    /**
     * Validar y limpiar campo
     * @param input $info POST
     * @return string 
     */


    function validate($info){
        $info = trim($info);
        $info = stripcslashes($info);
        $info = htmlspecialchars($info);

        return $info;
    }

?>