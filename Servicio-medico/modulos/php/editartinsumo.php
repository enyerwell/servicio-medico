<?php
    include("conexion.php");
    $id = $_POST['ids'];
    $nombre = $_POST['medicamentoedit'];
    $regist = $_POST['registraedit'];
    $accion = $_POST['accioedit'];
    
    $res = "UPDATE `tipo_insumo` SET `nombre`= '$nombre',`registrado`= '$regist',`accions`= '$accion' WHERE `cod_insumo` = '$id'"; 
    $resp = mysqli_query($conexion,$res);
    if ($resp) {
        //echo "EN HORA BUENA";
        header('location:../../modulos/Tinsumo.php?res=50 ');
    } else {
        echo "NO FUNCIONA";
    }
?>