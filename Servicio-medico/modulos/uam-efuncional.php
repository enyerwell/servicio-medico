<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="../datatable/js/jquery-3.6.0.min.js"></script>
            <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

            <title>Document</title>
        </head>
            <body> 
                <?php
                    include("conexion.php");
                    $nombre = $_POST['nom'];
                    $apellidos = $_POST['apellidos'];
                    $fn = $_POST['fn'];
                    $nac = $_POST['nacio'];
                    $edad = $_POST['años']; 
                    $sexo = $_POST['sexo'];
                    $ci = $_POST['cedula'];
                    $telf = $_POST['telefono'];
                    $correo = $_POST['cor'];
                    $ecivil = $_POST['civ'];
                    $direccion = $_POST['direcion'];
                    $mconsulta = $_POST['cm'];
                    $eactual = $_POST['actual'];
                    $afamiliares = $_POST['per'];
                    $apersonales = $_POST['pers'];
                    $habitos = $_POST['habitos'];
                ?>
                <div class="modal fade" id="efuncional" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                           <center><h5 class="modal-title" id="ModaleditarLabel"><b>Historia Medica</b></h5>
                        </div> 
                        <div class="modal-body">
                        <form action="../modulos/aum-historia2.php" method="post">
                            <input type="hidden" value="<?php echo $nombre?>" name="nombre" >
                            <input type="hidden" value="<?php echo $apellidos?>"name="apellido">
                            <input type="hidden" value="<?php echo $fn?>" name="nacimiento">
                            <input type="hidden" value="<?php echo $nac?>" name="nacionalista">
                            <input type="hidden" value="<?php echo $edad?>" name="edad">
                            <input type="hidden" value="<?php echo $sexo?>" name="genero">
                            <input type="hidden" value="<?php echo $ci?>" name="cd">
                            <input type="hidden" value="<?php echo $telf?>" name="tlf">
                            <input type="hidden" value="<?php echo $correo?>" name="mail">
                            <input type="hidden" value="<?php echo $ecivil?>" name="ecivil">
                            <input type="hidden" value="<?php echo $direccion?>" name="direc"> 
                            <input type="hidden" value="<?php echo $mconsulta?>" name = "mcon" >
                            <input type="hidden" value="<?php echo $eactual?>" name = "eactual">
                            <input type="hidden" value="<?php echo $afamiliares?>" name = "fami">
                            <input type="hidden" value="<?php echo $apersonales?>" name = apers > 
                            <input type="hidden" value="<?php echo $habitos?>" name = "habitos2" > 
                                                <center><fieldset><p><h4>Examen Funcional</h4></p></fieldset></center> 
                                                <div class="form gruop">
                                                    <input type="text"  name="cab" id="cabeza"placeholder = "Cabeza" required>
                                                    <input type="text"  name="oreja" id="oido" placeholder = "Oido" required>
                                                    <input type="text"  name="cue" id="cuello" placeholder = "Cuello" required>
                                                </div> <br>
                                                <div class="form gruop">
                                                    <input type="text"  name="ojoo" id="ojo" placeholder = "Ojo" required>
                                                    <input type="text"  name="naris" id="Naris" placeholder = "Naris" required>
                                                    <input type="text"  name="bo" id="boca" placeholder = "Boca" required>
                                                </div> <br>
                                                <div class="form gruop">
                                                    <input type="text" name="cardio" id="cardiopul" placeholder = "Cardiopulmonar" required>
                                                    <input type="text"  name="abd" id="abdomen" placeholder = "Abdomen" required>
                                                    <input type="text" name="geni" id="genitales" placeholder = "Genitales" required>
                                                </div> <br>
                                                <div class="form gruop">
                                                    <input type="text"  name="extri" id="extrimidades" placeholder = "Extremidades"required >
                                                    <input type="text" name="neuro" id="neurologicas" placeholder = "Neurologicas" required>
                                                </div> <br>
                                                <div class="form-floating">
                                                    <label for="floatingTextarea">Evaluacion</label>
                                                    <textarea class="form-control" placeholder="evaluacion" id="Textarea" name = "evaluacion"></textarea>
                                                </div> </fieldset> </center>
                                                <div class="modal-footer">
                                                     <button type="submit" id="btnGuardar" class=" btnsiguiente btn btn-primary">Siguiente</button>
                                                </div> 
                                            </form>
                        </div>
                        </div>
                    </div>
                </div>

            </body>
</html>