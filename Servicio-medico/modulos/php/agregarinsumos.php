   <?php
        include ("conexion.php");
        $fentrada = $_POST['fno'];
        $tipo = $_POST['tinsumo'];
        $cantidad = $_POST['cantidad'];
        $registrado  = $_POST['regist'];
        $accion = $_POST['acciones'];
        $y= "SELECT * FROM `insumos` WHERE cod_insumo = $tipo";
        $j = mysqli_query($conexion,$y);
        if (mysqli_num_rows($j) > 0) {
            //echo "funcioma";
            header('location:../../modulos/insumos.php?res=rc');
        }
        else 
        {
           $insert = "INSERT INTO `insumos`(`f_entrega`, `cod_insumo`, `cantidad`, `registro1`, `acciones`) VALUES ('$fentrada','$tipo','$cantidad','$registrado ','$accion')";
           $m = mysqli_query ($conexion,$insert );
            if ($m) 
           {
               header('location:../../modulos/insumos.php?res=vc');
                
            } else 
            {
                echo "no funciona";
                print_r($fentrada);
                //echo '<script type = "text/JvaScript"> alert ("ERROR Insumo No Registrado")</script>';
           }
           //echo "por aqio paso";
        }    
   ?>