<?php
    include("conexion.php");
    $nombre = $_POST['medicamento'];
    $regis = $_POST['registrado'];
    $accions = $_POST['accion'];

    $veri = "SELECT * FROM `tipo_insumo` WHERE nombre = '$nombre'";
    $co = mysqli_query($conexion,$veri);
    if (mysqli_num_rows($co) > 0) {
        //echo "EN HORA BUENA";
        header('location:../../modulos/Tinsumo.php?res=66.1 ');
    } else {
        $cons= "INSERT INTO `tipo_insumo`( `nombre`, `registrado`, `accions`) VALUES ('$nombre',' $regis','$accions')";
        $ty = mysqli_query($conexion,$cons);
        if ($ty) 
        {
            //echo "EN HORA BUENA";
            header('location:../../modulos/Tinsumo.php?res=66 ');
        } else 
        {
            echo "NO FUNCIONA";
            print_r($cons);
        }
    } 
    













   /* 
*/
?>