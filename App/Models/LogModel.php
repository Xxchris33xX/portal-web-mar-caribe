<?php
class LogModel extends Model
{
    public function __construct()
    {
       parent::__construct();
    }

    /******************************************************************
	*** Metodo para listar el historial de acciones de los usuarios ***
	*******************************************************************/

    public function mostrarHistorial(){
        $sql="SELECT id_historial, usuario.nom_usuario, mensaje, nombre_entidad,
        DATE_FORMAT(creado_en, '%d-%m-%Y') as fecha, TIME_FORMAT(creado_en, '%h:%i %p') as hora
        FROM historial 
            LEFT JOIN usuario  
            ON historial.id_usuario=usuario.id_usuario
            ORDER BY id_historial DESC;";
        foreach ($this->conn->query($sql) as $row){
            $this->n[]=$row;
        }
        //echo "hola";
            return $this->n;
            
    }

    /******************************************************************************************
	*** Metodo para listar el historial de acciones de los usuarios con JSON para DataTable ***
	*******************************************************************************************/
    
    public function mostrarHistorialJSON(){
        $sql="SELECT id_historial, usuario.nom_usuario, mensaje, nombre_entidad,
        DATE_FORMAT(creado_en, '%d-%m-%Y') as fecha, TIME_FORMAT(creado_en, '%h:%i %p') as hora
        FROM historial 
            LEFT JOIN usuario  
            ON historial.id_usuario=usuario.id_usuario
            ORDER BY id_historial DESC;";
        foreach ($this->conn->query($sql) as $row){
            $this->n[]=$row;
        }
        //echo "hola";
        echo json_encode($this->n,JSON_UNESCAPED_UNICODE); 
    }

    /*************************************************************************
	*** Metodo para listar el historial de acciones por usuario individual ***
	**************************************************************************/

    public function mostrarHistorialPorUsuario($id){
        $sql="SELECT id_historial, usuario.nom_usuario, mensaje, nombre_entidad,
        DATE_FORMAT(creado_en, '%d-%m-%Y') as fecha, TIME_FORMAT(creado_en, '%h:%i %p') as hora
        FROM historial  
            LEFT JOIN usuario 
            ON historial.id_usuario=usuario.id_usuario
            WHERE historial.id_usuario='$id'";
        $stmt = $this->conn->prepare($sql);
        $stmt -> execute();
        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        foreach ($this->conn->query($sql) as $row){
            $this->n[]=$row;
        }
        echo json_encode($this->n,JSON_UNESCAPED_UNICODE);
    }

    /******************************************************************
	*** Metodo para listar el historial de sesiones de los usuarios ***
	*******************************************************************/

    public function mostrarHistorialSesiones()
    {
        $sql="SELECT id_sesion, usuario.nom_usuario,
        DATE_FORMAT(creado_en, '%d-%m-%Y') as fecha, TIME_FORMAT(creado_en, '%h:%i %p') as hora FROM historial_sesion
        LEFT JOIN usuario
        on historial_sesion.id_usuario = usuario.id_usuario
        ORDER BY id_sesion DESC;";
        foreach ($this->conn->query($sql) as $row){
            $this->n[]=$row;
        }
        //echo "hola";
            return $this->n;
            
    }

    /******************************************************************************************
	*** Metodo para listar el historial de sesiones de los usuarios con JSON para DataTable ***
	*******************************************************************************************/

    public function mostrarHistorialSesionesJSON()
    {
        $sql="SELECT id_sesion, usuario.nom_usuario,
        DATE_FORMAT(creado_en, '%d-%m-%Y') as fecha, TIME_FORMAT(creado_en, '%h:%i %p') as hora FROM historial_sesion
        LEFT JOIN usuario
        on historial_sesion.id_usuario = usuario.id_usuario
        ORDER BY id_sesion DESC;";
        foreach ($this->conn->query($sql) as $row){
            $this->n[]=$row;
        }
        //echo "hola";
        echo json_encode($this->n,JSON_UNESCAPED_UNICODE);   
    }
}