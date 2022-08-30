<?php
    include("conexion.php");
    $id = $_GET['id'];
    $eliminar = "DELETE FROM `historia_medica` WHERE `id_hm` = '$id'";
    $conex = mysqli_query($conexion,$eliminar);
    if ($conex) {
        //echo "EN HORA BUENA ";
        header('location:../../modulos/Historia_medica.php?res=E');
    } else {
        echo "NO ELIMINA ";
    }
    




?>