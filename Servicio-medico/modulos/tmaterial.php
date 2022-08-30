<!DOCTYPE html>
<html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" href="../images/img.ico">
            <link rel="stylesheet" href="../datatable/css/jquery.dataTables.css">
            <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
            <script src="../datatable/js/jquery-3.6.0.min.js"></script>
            <link rel="stylesheet" href="../datatable/css/icon.css"> 
            <title>Servicio Medico</title>

        </head>
        <body>
        <script src="../sweet/dist/sweetalert2.all.min.js"></script>

            <?php   
                    require ("../menufooter/menu.php"); 
            ?>
             
            <?php   
                include ("../menufooter/cuerposuperiortm.php"); 
             ?>
                <?php
                  if ($_GET['res']) 
                  {
                        echo '<script src="../js/alertas.js" > </script>';
                  } 
                   require ("../datatable/tmaterial.php");
                   
                   include("../menufooter/prinpicaladmin.php");
                    
                    require ("../menufooter/footer.php");  
                ?>
            <script src="../datatable/js/jquery.dataTables.min.js"></script>
            <script src="../datatable/js/bootstrap.min.js"></script>
            <script src="../datatable/js/dataTables.bootstrap.min.js"></script>
            <script src="../js/tmaterial.js"></script>
    </body>
</html>         