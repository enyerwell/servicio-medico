<?php
    $host = "localhost";
    $usuario = "ecalzadilla";
    $clave = "Eecc1687*";
    $bd = "bdserviciomedico";
    $conexion = mysqli_connect($host,$usuario,$clave,$bd);
    if (!$conexion) 
    {
        echo("CONEXION FALLIDA " . mysqli_connect_error());
    
    }

?>
