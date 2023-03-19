<?php 
date_default_timezone_set('Europe/Madrid'); /*Establecer zona horaria*/
setcookie("ip", $_SERVER["REMOTE_ADDR"]); /*Crear cookie con IP y Fecha*/
setcookie("fecha", date('d-m-Y h:i:s'));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hito individual 2T</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
    <script src="https://kit.fontawesome.com/953f80cad3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/index.css" type="text/css">
</head>

<body>
    <header>        
    <div id="menupr">
                
                <div>
                    <button class="btn"><a href="../index.php">INICIO</a></button>
                    <button class="btn"><a href="blog.php">ENTRADAS</a></button>
                    <button class="btn"><a href="newentrada.php">AÑADIR POST</a></button>
                </div>

            </div>
    </header>

    <!--FINAL HEADER-->
        <div id="padre">    
            <div id="cuerpo">

            <?php
require_once("../MODELO/claseEntradas.php");
$post = new entrada();
$recordset = $post->getEntradas();


while($fila = mysqli_fetch_array($recordset)){
    echo '<section class="pagina_contacto">';
    echo "<div>";
    echo '<h1 style="display:none;">'.$fila['id'].'</h1>';
    echo "<h1>".$fila['titulo']."</h1>";
    echo "<h3>".$fila['email']."   ".$fila['fecha_publicacion']."</h3>";
    echo "<p>".$fila['contenido']."</p>";

    echo '
    <a href="https://www.w3schools.com"><button class="btn btn-danger">Borrar</button></a>
    ';
    echo "</div>";
    echo "</section>";
}


?>


            </div>

        </div>

    </header>
</body>
</html>



