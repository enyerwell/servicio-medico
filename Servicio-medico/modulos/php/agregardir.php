<?php
    include("conexion.php");
    $div = $_POST['division'];
    $regis = $_POST['registrado'];
    $accion = $_GET['accions'];
    $x = "SELECT * FROM `Division` WHERE Division = '$div'";
    $s = mysqli_query($conexion,$x);
    if (mysqli_num_rows($s) > 0) 
    {
         //echo "EN HORA BUENA";
        header('location:../../modulos/Division.php?res=asb ');
    } 
    else 
    {
        $net = "INSERT INTO `Division`(`Division`,`registrodiv`, `acciondiv`) VALUES ('$div','$regis','$accion')";
        $re = mysqli_query($conexion,$net);
        if ($re) {
            //echo "EN HORA BUENA";
            header('location:../../modulos/Division.php?res=20a ');
        } else {
            echo "NO FUNCIONO";
        }
    }
?>