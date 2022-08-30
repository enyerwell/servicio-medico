<?php
 
        include ("conexion.php");
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cedula'];
        $correo = $_POST['correo'];
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $gerencia = $_POST['gerencia'];
        $perfil = $_POST['perfil'];
        $regisusser = $_POST['registrado18'];
        $acciusser = $_POST ['accions18'];
        $validar = "SELECT * FROM `usuario` WHERE `cedula` = $cedula";
        $validador = mysqli_query($conexion,$validar);
        if (mysqli_num_rows($validador) > 0) {
            //echo "valida";
            header('location:../../modulos/administrar.php?res=no');
        } 
        else 
        {
                $query = "INSERT INTO `usuario`(`Nombre`, `apellido`, `cedula`, `correo`, `usuario`, `passwordd`, `resuser` , `acciuser` , `id_gerencia`, `id_perfil`) values ('$nombre', '$apellido', '$cedula', '$correo', '$usuario', '$contraseña', '$regisusser' ,'$acciusser','$gerencia', '$perfil')";
                $resul = mysqli_query($conexion,$query);
                if ($resul)
                {
                       
                       header('location:../../modulos/administrar.php?res=jd');
                }
                else 
                { 
                
                    echo 'NO FUNCIONA';
                    print_r($query);
                }
        }
?>    