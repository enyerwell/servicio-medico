<?php
    require ("conexion.php");
        $query = "SELECT * FROM `usuario` INNER JOIN perfil ON usuario.id = perfil.cod";
        $r=mysqli_query($conexion,$query);
?>      