<?php
    include ("conexion.php");
    $id = $_POST['id20a'];
    $divi = $_POST['division20a'];
    $gere = $_POST ['gerencia20a'];
    $regdir = $_POST['registrado18'];
    $acciodiv = $_POST['accions18']; 
    $very = "UPDATE `Division` SET Division = '$divi ', registrodiv = '$regdir ',acciondiv= '$acciodi' WHERE id_D = '$id'";
    $con = mysqli_query($conexion,$very);
    if ($con) {
        //echo "EN HORA BUENA";
        header('location:../../modulos/Division.php?res=1984 ');
    } else {
        echo "NO FUNCIONA";
        print_r($very);
    }
    
    

?>