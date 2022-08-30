<?php
    include ("conexion.php");
    session_start ();
    $usuario= $_POST ['usuario'];
    $password=$_POST ['password'];
    $_SESSION['log']=false;

    $q= "SELECT * FROM usuario INNER JOIN perfil on usuario.id_perfil=perfil.cod WHERE usuario = '$usuario' AND passwordd = '$password'";
    $consulta = mysqli_query($conexion,$q);
    $x = mysqli_num_rows($consulta);
    $fila = mysqli_fetch_assoc($consulta);   

    if($x>0) 
    {
        $_SESSION['log']=true;
        $_SESSION['USUARIO']=$fila['usuario'];
        $_SESSION['nombre']=$fila['nombre'];
        $_SESSION['apellido']= $fila['apellido'];
        $_SESSION['id_PERFIL']= $fila['nombre_cargo'];
        
        
        //echo "usuario registrado";
       // header("Location: ../principal.php");
        header("Location: ../Servicio-medico/");
    }
    else
    {
       
        //echo("usuario no registrado");


        header("Location: ../index2.php");

    }
?> 


