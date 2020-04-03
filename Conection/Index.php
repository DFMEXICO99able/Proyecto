-<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Introducción a PHP</h1>
    <?php
        $variable = "Hola Mundo desde PHP";    
         echo $variable;
    ?>
    <h1>Comentarios</h1>
    <?php
         echo "Si solo ves esto, los comentarios funcionan";
         /*Esto es un comentario
         ...
         .....
         multimenia */
         # Esto tambien es un comentario
         // Esto tambien es un comentario

    ?>
    <h1>Salida de datos</h1>
    <?php 
         echo "Hola Mundo desde PHP<br>";
         echo "Aqui existe un salto de linea";
    ?>
    <h1>Variables</h1>
    <?php
        $caracter = "Hola";
        $numerica = 12222;
        $boolean = TRUE;

        echo "Esto es una variable de tipo caracter". $caracter."<br>";
        echo "Esto es una variable de tipo numerica". $numerica."<br>";
        echo "Esto es una variable de tipo boolean". $boolean."<br>";
    ?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>