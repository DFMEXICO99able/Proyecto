<?php
    $server = "localhost";
    $username = "root";
    $passwd = "1234567890";
    $db = "instituto";
    //Creación de conexion de datos
    $conectar = mysqli_connect($server, $username, $passwd, $db);
    // Verificar la conexion
    if (!$conectar){
        die("La conexión Fallo, revisa los paremetros".mysqli_connect_error());
    }
    echo "Conexión exitosa";
?>