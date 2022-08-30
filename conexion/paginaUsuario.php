<?php

    session_start();
    $usuario = $_SESSION['username'];
    if (!isset($usuario))
    {
        header("location: index.php");
    }
    else
    {
        echo "<center";
        echo "<h1> BIENVENIDO $usuario</h1>";
        echo "<a href= 'conexion.salir.php'>SALIR</a>";
    }


?>
