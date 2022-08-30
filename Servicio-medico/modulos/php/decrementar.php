<?php
            include("conexion.php");
            $id = $_POST['idtt18'];
            $valor = $_POST['cante'];
            $decrementar = $_POST['disminuir'];
            $actualizada= $valor-$decrementar;

            if($decrementar > $valor)
            {
                //echo("cantidad de materiales insuficientes");
                header('location:../../modulos/materiales.php?res=HA ');
            }else{

            $query = "UPDATE `material` SET `cantidad`=$actualizada WHERE ID=$id";
            $respuesta = mysqli_query($conexion,$query);
            if($respuesta)
            {
                //echo("EN HORA BUENA");
                header('location:../../modulos/materiales.php?res=SJ ');
            }else{
                echo("no funciono");   
            }
            }
?> 