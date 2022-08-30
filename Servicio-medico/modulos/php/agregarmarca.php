<?php
    
    include ("conexion.php");
    $marca = $_POST['marca'];
    // VALIDACION DE QUE NO SE REPITAN LAS MARCAS 
    $eu = "SELECT * FROM `marca` WHERE laboratorio = '$marca'";
    $ue = mysqli_query($conexion,$eu);
    if (mysqli_num_rows($ue) > 0) {
        //echo "entro";
        header('location:../../modulos/marca.php?res=eu ');
    } 
    else 
    {
       
        //echo "Funciona";
        $mar = "INSERT INTO `marca`(`laboratorio`) VALUES ('$marca')";
        $ma = mysqli_query($conexion,$mar);
        if ($mar) {
           header('location:../../modulos/marca.php?res=hilo ');
        }

        
    }
    

    



?>