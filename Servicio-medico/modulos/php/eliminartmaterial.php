   <?php
        include("conexion.php");
        $id = $_GET['id'];
        $q = "DELETE FROM `tipo_de_material` WHERE cod_tmaterial = '$id'";
        $t = mysqli_query($conexion, $q);
        if ($t) {
            //echo "EN HORA BUENA";
            header('location:../../modulos/tmaterial.php?res=100 ');
        } else {
            echo "NO FUNCIONA";
            print_r($_POST);
        }
        



   ?>