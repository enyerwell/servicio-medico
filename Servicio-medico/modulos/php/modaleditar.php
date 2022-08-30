    <?php
        include("conexion.php");
        $id = $_POST['idedit'];
        $nombre = $_POST['nombreedit'];
        $apellido = $_POST['apellidoedit'];
        $cedula = $_POST['cedulaedit'];
        $correo = $_POST['correoedit'];
        $gerencia = $_POST['gerenciaedit'];
        $perfil = $_POST['perfiledit'];
        $usuario = $_POST['usuarioedit'];
        $contraseña = $_POST['contraseñaedit'];
        $regusser = $_POST['registrado'];
        $aciousser = $_POST['accions'];
        $q = "UPDATE `usuario` SET Nombre = '$nombre',apellido ='$apellido', cedula ='$cedula', correo ='$correo',
                     usuario ='$usuario', passwordd ='$contraseña',resuser = '$regusser', acciuser = ' $aciousser' , id_gerencia ='$gerencia', id_perfil ='$perfil'  WHERE id = '$id' ";
        $p = mysqli_query($conexion,$q);
        if ($p) { 
            header('location:../../modulos/administrar.php?res=jp'); 
        } else 
        {
            echo ("NO FUNCIONA");
            print_r($q);
        }
            
    ?>