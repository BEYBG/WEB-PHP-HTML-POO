<?php 


class entrada {
    private $id;

    private $email;
    private $titulo;
    private $contenido;
    private $fecha_publicacion;

    private $link; 
public function __construct() {
    include_once ("../MODELO/BD/claseConexion.php");
    $this -> link = new conexion;
}


/* esta función sirve para almacenar una entrada nueva en la base de datos*/
public function setEntrada($email, $titulo, $contenido){

    $sql = "INSERT INTO entradas (email, titulo,contenido ) VALUES ('$email', '$titulo','$contenido')";

    $resultado = $this->link-> executeQuery($sql);
    return $resultado;

   
}

    public function getEntradas (){

    $sql = "SELECT * FROM `entradas`";        
    $registros = $this->link->executeQuery($sql);
    
    return $registros;
    }

    public function deleteEntradaByid($id){
        $this -> id =$id;
        $sql = "DELETE FROM entradas WHERE id =".$id;
        $registros = $this -> link ->executeQuery($sql);
        return $registros;
    }
}




?>