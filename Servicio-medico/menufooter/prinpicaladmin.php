<!DOCTYPE html>
<html lang="es">   
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="shortcut icon" href="../images/img.ico">
            <title>Servicio Medico | VTV</title>
            <?php 
                require ("libreria2.php");
            ?>
        </head>   
        <body data-spy="scroll" data-target=".navbar" data-offset="80">
            <br><br><br><br><br>
            <center><div class="container responsive">
                <div class="row ">
                   <br> 
                        <div class = "col-md-4 col-sm-4 col-xs-12">
                            <a href="materiales.php"><img src="../images/pastillas.png" class="rounded float-end img-fluid" alt="..."></a>
                            <br><label for="">MATERIALES</label>
                        </div>
                         <div class = "col-md-4 col-sm-4 col-xs-12">
                            <a href = "tmaterial.php"><img src="../images/tmaterial.png" class="rounded float-end img-fluid" alt="..."></a>
                            <br><label for="">TIPO DE MATERIAL</label>
                        </div>
                        <div class = "col-md-4 col-sm-4 col-xs-12">
                           <a  href = "insumos.php"><img src="../images/insumos.png" class="rounded float-start img-fluid" alt="..."></a>
                            <br><label for="">INSUMOS</label>
                        </div>
                            
                </div> 
            </div>  
            <center><div class="container">
                <br><div class="row">
                        <div class = "col-md-4 col-sm-4 col-xs-12">
                            <a href = "Tinsumo.php"><img src="../images/tinsumo.png" class="rounded float-start img-fluid img-fluid" alt="..."></a>
                            <br><label for="">TIPO DE INSUMO</label>
                        </div>
                        <div class = "col-md-4 col-sm-4 col-xs-12">
                            <a  href="Gerencia.php"><img src="../images/gerencia.png" class="rounded mx-auto d-block img-fluid" alt="..."> </a>
                            <br><label for="">GERENCIA</label>
                        </div>
                        <div class = "col-md-4 col-sm-4 col-xs-12">
                            <a href = "Division.php" ><img src="../images/division.png" class="rounded mx-auto d-block img-fluid" alt="..."></a>
                            <br><label for="">DIVISION</label>
                        </div>
                       
                </div>  
            </div>   
           <center> <div class="container">
                <br><div class="row">
                        <?php 
                            if($_SESSION['id_PERFIL'] == "Root"){
                        ?>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                       <a href = "administrar.php"> <img src="../images/usuarios.png" class="rounded" alt="..."></a>
                        <br><label for="">USUARIOS</label>
                    </div>
                    <?php }?>
                         <?php 
                            if($_SESSION['id_PERFIL'] == "Administrador"){
                        ?>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                       <a href = "administrar.php"> <img src="../images/sugerencia.png" class="rounded" alt="..."></a>
                        <br><label for="">SUGERENCIAS</label>
                    </div>
                    <?php }?>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                       
                    </div>
                </div>  
            </div>  
            <br><br><br>
                        
        </body>
</html>