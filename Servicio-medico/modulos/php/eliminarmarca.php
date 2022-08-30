<?php
    include("conexion.php");
    $idj = $_GET['id'];
    $mareli = "DELETE FROM `marca` WHERE `marca.idm` = '$idj'";
    $marel = mysqli_query($conexion.$mareeli);
    if ($marel) {
        echo "finciona";
        ('location:../../modulos/marca.php?res=05');
    } else {
        echo "por aqui paso";
    }
?>