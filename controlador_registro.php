<?php 

require_once("../MODELO/claseUsuarios.php");

$user = new usuarios;

if (!empty($_POST['nombre']) AND !empty($_POST['password']) ) {

    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

     //Busqueda en la base de datos del usuario

    $recordset = $user-> setUsuario($nombre, $password);

    if ($recordset){
        header("Location:../vista/login.php");
    }else{
        header("Location:../vista/registro.php");
  } 
}

?>