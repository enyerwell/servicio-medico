<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/img.ico">
    <link rel="stylesheet" href="../datatable/css/jquery.dataTables.css">
    <script src="../datatable/js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../datatable/css/icon.css"> 
    <title>Servicio Medico</title>
</head>
<body>
    <?php
        require ("../menufooter/menu.php");
    ?><br><br><br><br><br><br>;
    <?php

        require ("../datatable/citas.php");

        require ("../menufooter/cuerpobajocitas.php");
      
        require ("../menufooter/footer.php");
    ?>
    <script src="../datatable/js/jquery.dataTables.min.js"></script>
    <script src="../datatable/js/bootstrap.min.js"></script>
    <script src="../datatable/js/dataTables.bootstrap.min.js"></script>
    <script src="../js/citas.js"></script>
</body>
</html>