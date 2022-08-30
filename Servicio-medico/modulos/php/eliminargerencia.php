<?php
    include ("conexion.php");
    $id = $_GET['id'];
    $query = "DELETE FROM `Gerencia` WHERE Gerencia.Id_G =  '$id'";  
    $con = mysqli_query($conexion,$query);
    if ($con) {
        //echo " EN HORA BUENA";
        header('location:../../modulos/Gerencia.php?res=05 ');
    } else {
        echo "NO FUNCIONA". $id;
    }
    






?>