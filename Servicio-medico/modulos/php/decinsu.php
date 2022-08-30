<?php
            include("conexion.php");
            $id = $_POST['IDdec'];
            $valor = $_POST['cantidaddec'];
            $decrementar = $_POST['disminuir'];
            $actualizada= $valor-$decrementar;

            if($decrementar > $valor)
            {
                //echo("cantidad de insumos insuficientes");
                header('location:../../modulos/insumos.php?res=10 ');
            }else{

            $query = "UPDATE `insumos` SET `cantidad`=$actualizada WHERE id=$id";
            $respuesta = mysqli_query($conexion,$query);
            if($respuesta)
            {
                //echo("EN HORA BUENA");
                header('location:../../modulos/insumos.php?res=27 ');
            }else{
                echo("no funciono");  
                print_r($_POST) ;
            }
            }
?> 