
<?php 
 
require_once("../MODELO/BD/claseConexion.php");
require_once("../Controlador/controlador_registro.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
    <script src="https://kit.fontawesome.com/953f80cad3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css" type="text/css">
    
    <title>HITO INDIVIDUAL 2T</title>
</head>
<body>
    <div id="padre">
        <div id="titulo">
            <h1>REGISTRO DE USUARIO</h1>
        </div>
        <div id="formulario" class="fondo">

            <div id="menu">
				<a href="login.php"><h2>ENTRAR</h2></a>
				<a href="registro.php"><h2>REGISTRARSE</h2></a>
			</div>

            <div id="datos">
<!--Formulario con método post para recoger y enviar datos-->
                <form id="form" method="post" action="../CONTROLADOR/controlador_registro.php"> <!--action ponemos la ruta del php que recibirá los datos-->
                    
                    <label>Nombre de usuario</label>
                    <input id="nombre" class="form-control" type="text" name="nombre">

                    <label for="password" class="form-label">Contraseña</label>
                    <input type="text" name="password" class="form-control" id="password">

                    <div class="botones">
                        <button id="btn1" type="submit" class="btn">Guardar</button> <!-- Este botón es para enviar los datos del formulario -->
                        <a id="btn2" class="btn" href="">Cancelar</a> 
                    </div>
                </form>
            </div>    
        </div>
    </div>


</body>
</html>