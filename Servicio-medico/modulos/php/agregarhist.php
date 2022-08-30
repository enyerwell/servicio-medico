<?php
    include("conexion.php");
    $nombre = $_POST['nom'];
    $apellidos = $_POST['apellidos'];
    $fn = $_POST['fn'];
    $nacio = $_POST['nacio'];
    $edad = $_POST['años'];
    $sexo = $_POST['sexo'];
    $ci = $_POST['cedula'];
    $ecivil = $_POST['ecivil2'];
    $telf = $_POST['telefono'];
    $direccion = $_POST['direcion'];
    $correo = $_POST['cor'];
    $mconsulta = $_POST['cm'];
    $eactual = $_POST['actual'];
    $apersonales = $_POST['pers'];
    $afamiliares = $_POST['per'];
    $habitos = $_POST['habitos'];
    $cab = $_POST['cab'];
    $oidos = $_POST['oidoo'];
    $cuello = $_POST['cue'];
    $ojo = $_POST['ojoo'];
    $naris = $_POST['naris'];
    $boca = $_POST['bo'];
    $cardio = $_POST['cardio'];
    $abdom = $_POST['abd'];
    $genital = $_POST['geni'];
    $extri = $_POST['extri'];
    $neuro = $_POST['neuro'];
    $evalu = $_POST['evaluacion'];
    $svitales = $_POST['svital'];
    $general = $_POST['general'];
    $afectados = $_POST['afectados'];
    $impresiones = $_POST['impresiones'];
    $paraclinico = $_POST['paraclinico'];
    $conducta =$_POST['conducta'];
    $validar = "SELECT * FROM `historia_medica` WHERE  `ci` = '$ci' ";
    $Q = mysqli_query($conexion,$validar);
   if (mysqli_num_rows($Q) > 0)  
   {
        //echo "EN HORA BUENA";
        header('location:../../modulos/Historia_medica.php?res=REPI');
    } else { 
        //echo "NO FUNCIONA";
        $bd = " INSERT INTO `historia_medica`(`nombre`, `apellido`, `fn`, `nacionalidad`, `edad`, `sexo`, `ci`, `ecivil`, `telefono`, `correo`, `direccion`, `mconsulta`, `eactuales`, `apersonales`, `afamiliares`, `habitos`, `cabeza`, `oido`, `cuello`, `ojo`, `naris`, `boca`, `cardiopulmunar`, `abdomen`, `genital`, `extremidades`, `neurologicas`, `evaluacion`, `svitales`, `general`, `afectados`, `impresion`, `paraclinico`, `conducta`) 
                                      VALUES ('$nombre','$apellidos','$fn ','$nacio','$edad','$sexo ','$ci',' $ecivil','$telf','$correo ','$direccion','$mconsulta','$eactual','$apersonales','$afamiliares','$habitos',' $cab',' $oidos','$cuello',' $ojo','$naris','$boca',' $cardio','$abdom','$genital','$extri','$neuro',' $evalu','$svitales','$general', '$afectados' ,'$impresiones','$paraclinico',' $conducta ')  ";
        $con = mysqli_query($conexion,$bd);
        if ($con) {
            //echo "EN HORA BUENA";
            header('location:../../modulos/Historia_medica.php?res=R');
        } else {
            echo "NO FUNCIONA";
            print_r($bd);
        }
    }
    



   
?>