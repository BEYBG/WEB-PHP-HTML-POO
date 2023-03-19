<?php 

require_once("../MODELO/claseEntradas.php");

$user = new entrada;

if (!empty($_POST['email']) AND !empty($_POST['titulo']) AND !empty($_POST['contenido']) ) {

    $email = $_POST['email'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];

     //Busqueda en la base de datos de entradas

    $resultado = $user-> setEntrada($email, $titulo, $contenido);

    if ($resultado){
        header("Location:../vista/blog.php");
    }else{
        header("Location:../vista/registro.php");
  } 
}

?>