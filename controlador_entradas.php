<?php


include_once("../MODELO/claseEntradas.php");

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];


function mostrarEntradas($link){


     $registros = new entrada;
     $registros -> getEntradas();



    return $registros;

}


?>