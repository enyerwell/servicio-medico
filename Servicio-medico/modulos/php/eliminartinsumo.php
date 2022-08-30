  <?php
        include("conexion.php");
        $id = $_GET['id'];
        $w = "DELETE FROM `tipo_insumo` WHERE `cod_insumo` = '$id'";
        $z = mysqli_query($conexion,$w);
        if ($z) {
            //echo"EN HORA BUENA";
            header('location:../../modulos/Tinsumo.php?res=16 ');
        } else {
            echo"NO FUNCIONA";
            print_r($_GET);
        }
    ?>
      