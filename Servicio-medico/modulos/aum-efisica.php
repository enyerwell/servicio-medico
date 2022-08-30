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
                    $nombre = $_POST['nombre'];
                    $apellidos = $_POST['apellido'];
                    $fn = $_POST['nacimiento'];
                    $nacio = $_POST['nacionalista'];
                    $edad = $_POST['edad'];
                    $sexo = $_POST['genero'];
                    $ci = $_POST['cd'];
                    $telf = $_POST['tlf'];
                    $correo = $_POST['mail'];
                    $ecivil = $_POST['ecivil'];
                    $direccion = $_POST['direc'];
                    $mconsulta = $_POST['mcon'];
                    $eactual = $_POST['eactual'];
                    $apersonales = $_POST['apers'];
                    $afamiliares = $_POST['fami'];
                    $habitos = $_POST['habitos2'];
                    $cab = $_POST['cab'];
                    $oidos = $_POST['oreja'];
                    $cuello = $_POST['cue'];
                    $ojo = $_POST['ojoo'];
                    $naris = $_POST['naris'];
                    $boca = $_POST['bo'];
                    $cardio = $_POST['cardio'];
                    $abdomen = $_POST['abd'];
                    $genital = $_POST['geni'];
                    $extri = $_POST['extri'];
                    $neuro = $_POST['neuro'];
                    $evalu = $_POST['evaluacion'];
                    
                ?>
                <div class="modal fade" id="efisico" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl dialog-scrollable">
                        <div class="modal-content"> 
                        <div class="modal-header">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                           <center><h5 class="modal-title" id="ModaleditarLabel"><b>Historia Medica</b></h5>
                        </div>  
                        <div class="modal-body">
                            <form action="../modulos/php/agregarhist.php" method="post">
                            <input type="hidden" value="<?php echo $nombre?>" name="nombre2" >
                            <input type="hidden" value="<?php echo $apellidos?>"name="apellido2">
                            <input type="hidden" value="<?php echo $fn?>" name="nacimiento2">
                            <input type="hidden" value="<?php echo $nacio?>" name="nacionalidad2">
                            <input type="hidden" value="<?php echo $edad?>" name="edad2">
                            <input type="hidden" value="<?php echo $sexo?>" name="genero2">
                            <input type="hidden" value="<?php echo $ci?>" name="cd2">
                            <input type="hidden" value="<?php echo $ecivil?>" name="ecivil2">
                            <input type="hidden" value="<?php echo $telf?>" name="tlf2">
                            <input type="hidden" value="<?php echo $correo?>" name="mail2">
                            <input type="hidden" value="<?php echo $direccion?>" name="direc2">
                            <input type="hidden" value="<?php echo $mconsulta?>" name = "mcon2" >
                            <input type="hidden" value="<?php echo $eactual?>" name = "eactual2">
                            <input type="hidden" value="<?php echo $apersonales?>" name = apers2 >
                            <input type="hidden" value="<?php echo $afamiliares?>" name = "fami2">
                            <input type="hidden" value="<?php echo $habitos?>" name = habitos3>
                            <input type="hidden" value="<?php echo $cab?>"  name = "cab2">
                            <input type="hidden" value="<?php echo $oidos?>" name = "oido2">
                            <input type="hidden" value="<?php echo $cuello?>" name = "cuello2">
                            <input type="hidden" value="<?php echo $ojo?>" name = "ojoo2">
                            <input type="hidden" value="<?php echo $naris?>" name = "naris2">
                            <input type="hidden" value="<?php echo $boca?>" name = "bo2">
                            <input type="hidden" value="<?php echo $cardio?>" name = "cardio2">
                            <input type="hidden" value="<?php echo $abdomen?>" name = "abd2">
                            <input type="hidden" value="<?php echo $genital?>" name = "geni2">
                            <input type="hidden" value="<?php echo $extri?>" name = "extri2">
                            <input type="hidden" value="<?php echo $neuro?>" name = "neuro2">
                            <input type="hidden" value="<?php echo $evalu?>" name = "evaluacion2">
                                  <center><fieldset> 
                                  <center><fieldset><p><h4>Examen Fisico</h4></p></fieldset></center>
                                <div class="form-group">
                                                    <center><fieldset><p><h4>Aparatos y Sistemas </h4></p></fieldset></center>
                                                    <textarea class="form-control" placeholder="Signos Vitales" id="svitales" name = "svital" maxlength = "10000" minlenth = "10"></textarea> <br>
                                                    <textarea class="form-control" placeholder="General" id="gene" name = "general" maxlength = "10000" minlenth = "10"></textarea> <br>
                                                    <textarea class="form-control" placeholder="Piel y Mucosa, Torax, Abdonen, Genitales, Extremidades, Neurologico,  " id="muc" name = "afectados" maxlength = "10000" minlenth = "10"></textarea> <br>
                                                    <textarea class="form-control" placeholder="Impresion Diagnostica" id="impre" name = "impresiones" maxlength = "10000" minlenth = "10"></textarea> <br>
                                                    <textarea class="form-control" placeholder="Paraclinicos" id="paracli" name = "paraclinico"></textarea> <br>
                                                    <textarea class="form-control" placeholder="Conducta a segir" id="condu" name = "conducta" maxlength = "10000" minlenth = "10"></textarea>
                                                </div>
                                                </fieldset> </center>
                                                <div class="modal-footer">
                                                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                     <button type="submit" id="btnGuardar" class=" btnGuardar btn btn-primary">Guardar</button>
                                                </div> 
                                            </form>
                        </div>
                        </div>
                    </div>
                </div>

            </body>
</html>