<?php
    include("conexion.php");
    $gerencia = $_POST['gerencia'];
    $respon = $_POST['registrado'];
    $acciones = $_POST['accions'];

    $cons = "SELECT * FROM `Gerencia` WHERE `Gerencia` = '$gerencia'";
    $r = mysqli_query($conexion,$cons);
    if (mysqli_num_rows($r) > 0) {
       //echo "valida".$gerencia;
        header('location:../../modulos/Gerencia.php?res=jm ');
    } else {
        $query = "INSERT INTO `Gerencia`(`Gerencia`, `regis`, `acciosger`) VALUES ('$gerencia','$respon','$acciones')";
        $e = mysqli_query($conexion,$query);
        if ($e) {
          //echo "insertar".$gerencia;
          header('location:../../modulos/Gerencia.php?res=jc');
        } else {
            echo "NO INSERTA";
        }
        

        
   }
?>