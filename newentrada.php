

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
    <link rel="stylesheet" href="../CSS/blog.css" type="text/css">
    
    <title>HITO INDIVIDUAL 2T</title>
</head>
<body>

<div id="padre">
        <div id="menupr">
            <div id="botones">
            <button id="blog" class="btn"><a href="blog.php">VOLVER</a></button>
            </div>
        </div>

       <!-- FIND EL HEADER--> 

        <div id="contenido">
            <h1>CREAR POST</h1>
            <form id="form" method="post" action="../CONTROLADOR/controlador_newentrada.php"> 
                <div class="container">

                    <div id="autor">
                        
                    
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="text" name="email" class="form-control" autocomplete="off">  
                    </div>
                    <div id="content">
                        <label>Título</label>
                        <input  class="form-control" type="text" name="titulo">

                        <label for="contenido" class="form-label">Contenido</label>
                        <input id="contenido" type="text" name="contenido" class="form-control" >
                    </div>
                    <div id="guardar">
                        <button id="boton" type="submit" class="btn">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
</div>
</body>
</html>
