<?php 
  

  /* las variables o parametros de estas funciones son las de los inputs del metodo post del formulario de login o registro*/
class usuarios{  
    private $nombre;
    private $password;
    private $link;

    public function __construct() {
        include_once ("../MODELO/BD/claseConexion.php");
        $this -> link = new conexion();
    }

  public function setUsuario($nombre, $password){


    $sql = "INSERT INTO usuarios (nombre, password) VALUES ('$nombre', '$password')";
    $resultado = $this->link-> executeQuery($sql);
    return $resultado;
}

    public function getUsuario ($nombre, $password){
        
        $this -> nombre = $nombre;
        $this -> password = $password;
        $sql = "SELECT * FROM `usuarios` WHERE nombre = '$nombre' and password = '$password';";
        $resultado = $this->link-> executeQuery($sql);
    
        return $resultado;
    }

 }