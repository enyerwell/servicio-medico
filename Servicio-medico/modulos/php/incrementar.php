<?php
    include("conexion.php");
    $id = $_POST['idt1'];
    $valor = $_POST['cant1'];
    $incrementar = $_POST['incrementa'];

    $actualizada= $valor+$incrementar;
    $query = "UPDATE `material` SET `cantidad`=$actualizada WHERE ID=$id";
    $respuesta = mysqli_query($conexion,$query);
    if($respuesta)
    {
        //echo("EN HORA BUENA");
         header('location:../../modulos/materiales.php?res=HC ');
    }else{
        echo("no funciono");   
    }
    
?>  