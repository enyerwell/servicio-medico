<?php
        include ("conexion.php");
        $id = $_GET['id'];
        $consulta = "DELETE FROM `usuario` WHERE usuario.id = '$id' ";
        $res = mysqli_query($conexion,$consulta);
        if ($res) 
        {
            //echo $id;
           header('location:../../modulos/administrar.php?res=bn');
            
        }else
        {
            echo ("NO FUNCIONA");
        }
?>