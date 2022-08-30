<?php
    include("conexion.php");
    $material = $_POST['material'];
    $registrado = $_POST['registrado'];
    $accion = $_POST['accion'];

   $cue = "SELECT * FROM `tipo_de_material` WHERE medicamento = '$material'";
    $Y= mysqli_query($conexion,$cue);
    if (mysqli_num_rows($Y)>0) {
        //echo "EN HORA BUENA";
        header('location:../../modulos/tmaterial.php?res=88 ');
    } else {
        $mat = "INSERT INTO `tipo_de_material`(`medicamento`, `registrado por`, `accion`) VALUES ('$material','$registrado','$accion')";
        $conv = mysqli_query($conexion,$mat);
            if ($conv) {
                //echo "EN HORA BUENA";
                //print_r($cue);
                header('location:../../modulos/tmaterial.php?res=99 ');
            } else {
                echo "NO FUNCIONA";
                print_r($mat);
            }
    }
    









   
    





?>