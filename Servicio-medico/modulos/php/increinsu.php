<?php
    include("conexion.php");
    $id = $_POST['IDinc'];
    $valor = $_POST['cantidaincre'];
    $incrementar = $_POST['incrementa'];

    $actualizada= $valor+$incrementar;
    $query = "UPDATE `insumos` SET `cantidad`=$actualizada WHERE id=$id";
    $respuesta = mysqli_query($conexion,$query);
    if($respuesta)
    {
        //echo("EN HORA BUENA");
        header('location:../../modulos/insumos.php?res=84 ');
    }else{
        echo("no funciono");  
        print_r($_POST) ;
    }
    
?> 