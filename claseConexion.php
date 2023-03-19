
 
 
 <?php

class conexion
{
    //aquí metemos los parámetros que tendrá la conexión a la base de datos
    private $host = "localhost"; //dirección de anfitrión que almacena la base de datos
    private $nombre = "root"; 
    private $password = "";
    private $db = "HITOBDD"; //nombre de la base de datos
    private $link; 
 
     //esta es la funcion contruir la cual comprueba si se ha conectado bien y sino te da un error
     public function __construct() {
      $this->link = mysqli_connect($this->host, $this->nombre, $this->password, $this->db); //introducimos los parámetros de conexión y los guardamos en link
      if (!$this->link) { //si no hay conexión
        die("Conexión fallida: " . mysqli_connect_error());
      }
  }
 
 
    public function executeQuery($sql){
        $resultado = mysqli_query($this->link, $sql);
        if(!$resultado) {
            die("Error al ejecutar la consulta: " . mysqli_error($this->link));
        }
        return $resultado;
    }

    public function close() { //cerrar conexion de la base de datos
        mysqli_close($this->link);
    }

}





?> 