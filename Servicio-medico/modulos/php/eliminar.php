<?php
    include("conexion.php"); 
    $id = $_GET['id'];
    $query = "DELETE FROM `material` WHERE `ID`='$id'";
    $respuesta= mysqli_query($conexion,$query);
    if($respuesta){
     header('location:../../modulos/materiales.php?res=ug');
    }else{
        echo("Nofunciono");

    }



?>