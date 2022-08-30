<?php
    include("conexion.php");
    $id = $_POST['idS'];
    $medical = $_POST['materialS'];
    $t = "UPDATE `tipo_de_material` SET medicamento = '$medical' WHERE cod_tmaterial = $id";
    $r = mysqli_query($conexion,$t);
    if ($r) {
        //echo "EN HORA BUENA";
        header('location:../../modulos/tmaterial.php?res=101 ');
    } else {
        echo "NO FUNCIONA";
    }
?>