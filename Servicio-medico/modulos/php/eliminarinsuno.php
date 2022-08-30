<?php
    include("conexion.php");
    $id = $_GET['id'];
    $ec = "DELETE FROM `insumos` WHERE insumos.id = '$id'";
    $y = mysqli_query($conexion,$ec);
    if ($y) 
    {
        //echo "finciona";
        header('location:../../modulos/insumos.php?res=bn');
    } 
    else 
    {
        echo "por aqui paso";
    }
?>
 