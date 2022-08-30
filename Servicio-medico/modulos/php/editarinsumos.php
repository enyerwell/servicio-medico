<?php
        include ("conexion.php");
        $id = $_POST['ids'];
        $fentrada = $_POST['fnoedit'];
        $medicamento = $_POST['tinsumo'];
        $cantidad = $_POST['cantidadedit'];
        $reg = $_POST['registradoedit'];
        $acciones = $_POST['accionedit'];
        
        
        $gc = "UPDATE `insumos` SET `f_entrega`= '$fentrada ',`cod_insumo`= '$medicamento',`cantidad`= '$cantidad',`registro1`= '$reg',`acciones`= '$acciones' WHERE `id` = '$id'";
        $lc = mysqli_query($conexion,$gc);
        if ($lc) {
            //echo "funciona";
            //print_r($_POST);
            header('location:../../modulos/insumos.php?res=ac');
        } else {
            echo "por aqui paso";
            print_r($gc);
        }
        

?> 