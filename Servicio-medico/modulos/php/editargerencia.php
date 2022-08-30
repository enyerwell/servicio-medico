<?php
    include ("conexion.php");
    $id = $_POST['id05'];
    $gerencia = $_POST['gerencia05'];
    $registrar = $_POST['regisedit'];
    $action = $_POST['accionsedit'];

    $cone = "UPDATE `Gerencia` SET `Gerencia`= '$gerencia', `regis`= '$registrar', `acciosger`= '$action' WHERE `Id_G` = '$id'";
    $r = mysqli_query($conexion,$cone);
    if ($r) {
        //echo " EN HORA BUENA".$gerencia;
        header('location:../../modulos/Gerencia.php?res=17 ');
    } else {
        echo "no funciona";
        print_r($cone);
    }
    





?>