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
    <link rel="stylesheet" href="../webcorporativa/css/index.css" type="text/css">
</head>

<body>
    <header>        
        <div id="menupr">
                
            <div>
                <button class="btn"><a href="#">INICIO</a></button>
                <button class="btn"><a href="VISTA/blog.php">ENTRADAS</a></button>
                <button class="btn"><a href="VISTA/newentrada.php">AÑADIR POST</a></button>
            </div>
        </div>
    </header>

    <!--FINAL HEADER-->
        <div id="padre">    
            <div id="cuerpo">

            <h1>BLOG</h1>
                
                <section class="container">
                   <h2>PROGRAMACIÓN ORIENTADA A OBJETOS</h2>
                    <h3></h3>
                    <p>La programación orientada a objetos (POO, en español); es un paradigma de programación que parte del concepto de "objetos" como base, los cuales contienen información en forma de campos (a veces también referidos como atributos o propiedades) y código en forma de métodos.

Los objetos son capaces de interactuar y modificar los valores contenidos en sus campos o atributos (estado) a través de sus métodos (comportamiento).1​

Muchos de los objetos prediseñados de los lenguajes de programación actuales permiten la agrupación en bibliotecas o librerías, sin embargo, muchos de estos lenguajes permiten al usuario la creación de sus propias bibliotecas.

Algunas características clave de la programación orientada a objetos son herencia, cohesión, abstracción, polimorfismo, acoplamiento y encapsulamiento.

Su uso se popularizó a principios de la década de 1990. En la actualidad, existe una gran variedad de lenguajes de programación que soportan la orientación a objetos, estando la mayoría de éstos basados en el concepto de clases e instancias.</p>
                </section>


                <section class="container">
                   <h2>PROGRAMACIÓN DIRIGIDA A EVENTOS</h2>
                    <h3></h3>
                    <p>La programación dirigida por eventos es un paradigma de programación en el que tanto la estructura como la ejecución de los programas van determinados por los sucesos que ocurran en el sistema, definidos por el usuario o que ellos mismos provoquen.
                    El creador de un programa dirigido por eventos debe definir los eventos que manejarán su programa y las acciones que se realizarán al producirse cada uno de ellos, lo que se conoce como el administrador de evento. Los eventos soportados estarán determinados por el lenguaje de programación utilizado, por el sistema operativo e incluso por eventos creados por el mismo programador.

En la programación dirigida por eventos, al comenzar la ejecución del programa se llevarán a cabo las inicializaciones y demás código inicial y a continuación el programa quedará bloqueado hasta que se produzca algún evento. Cuando alguno de los eventos esperados por el programa tenga lugar, el programa pasará a ejecutar el código del correspondiente administrador de evento. Por ejemplo, si el evento consiste en que el usuario ha hecho clic en el botón de play de un reproductor de películas, se ejecutará el código del administrador de evento, que será el que haga que la película se muestre por pantalla.
                    </p>
                </section>

                <section class="container">
                   <h2>PROGRAMACIÓN PROCEDIMENTAL</h2>
                    <h3></h3>
                    <p>La programación procedimental o programación por procedimientos es un paradigma de la programación. Muchas veces es aplicable tanto en lenguajes de programación de bajo nivel como en lenguajes de alto nivel. En el caso de que esta técnica se aplique en lenguajes de alto nivel, recibirá el nombre de programación funcional. Esta técnica consiste en basarse de un número muy bajo de expresiones repetidas, englobarlas todas en un procedimiento o función y llamarlo cada vez que tenga que ejecutarse.

Esta técnica de programación ofrece muy buena respuesta con relación al tamaño de los programas, y en bruto casi no se nota en la velocidad de ejecución de los mismos (mientras que las variables, constantes o índices de vector estén en memoria, como suele ser normal, estos se relacionarán entre sí, sin una carga de memoria considerablemente alta para los procesadores modernos); aunque es muy complicado conseguir una programación por procedimientos pura.
                    </p>
                </section>
            </div>

        </div>

    </header>
</body>
</html>
