<?php

        include ("conexion.php"); 
        $nombre = $_POST['nombre'];
        $cantidad = $_POST['can1'];
        $registro= $_POST['registrado'];
        $accion = $_POST['accions'];
        $val = "SELECT * FROM `material` WHERE `cod_tmaterial` = '$nombre'";
        $vali = mysqli_query($conexion,$val);
        if (mysqli_num_rows($vali) > 0) {
            //echo "valida";
            header('location:../../modulos/materiales.php?res=as ');
        } 
        else 
        { 
                $query = "INSERT INTO `material`(cod_tmaterial, cantidad,registro, accionmat) VALUES ('$nombre','$cantidad','$registro', '$accion')";
                $resul = mysqli_query($conexion,$query);
                //print_r($query);
                if ($resul)
                {
                    //echo "funciona";
                    header('location:../../modulos/materiales.php?res=cc ');
                    //print_r($query);
                }
                else 
                {
                    echo "por aqui pase";
                }
        } 
?>  
  