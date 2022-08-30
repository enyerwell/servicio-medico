<?php
    include("conexion.php");
    $id = $_GET['id'];
    $conet = "DELETE FROM `Division` WHERE Division.id_D = '$id'";
    $resul = mysqli_query($conexion,$conet);
    if ($resul) {
        //echo "EN HORA BUENA";
        header('location:../../modulos/Division.php?res=YES ');
    } else {
        echo "NO FUNCIONA";
    }
    

?>