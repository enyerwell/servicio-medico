<?php
    include ("conexion.php");
    $id = $_POST ['id1'];
    $tipo = $_POST ['materialedit'];
    $cantidad= $_POST ['cantidadedit'];
    $registrado = $_POST['registrado'];
    $accion = $_POST ['accion'];
    $query= "UPDATE `material` SET cod_tmaterial = '$tipo', cantidad = '$cantidad', registro = '$registrado', accionmat = '$accion' WHERE material.ID = '$id'";
    $resul = mysqli_query($conexion,$query);
    if($resul){
       header('location: ../../modulos/materiales.php?res=ag');
    }
    else {
        echo "no funciona";
        print_r($query);
    }
?>   