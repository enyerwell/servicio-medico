<!DOCTYPE html>
<html lang="es ">    
        <head>
            <style>
                table.dataTable thead  
                {
                    background: linear-gradient(to right, #000066, #000066);
                    color:white;
                }
                .modal-body 
                { 
                    position: relative; overflow-y: auto; max-height: 10%; padding: 10%; 
                }
                .modal-lg 
                { 
                    max-width: 30%;
                }
            </style> 
        </head>
        <body>
            <br><br><br><br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                            <center> <button type="button" class=" btnnuevo btn btn-primary" title = "Nuevo usuario" data-toggle="modal" data-target="#registrar"><img src="../images/agregar.png" alt="Agregar"></button>
                            <a type = "button" href="../modulos/php/pdf/#.php" title ="Reporte" class = "btn btn-danger btn-sm btnreporte " target="_blank"><img src="../images/pdf.png" alt="pdf"></a>
                            <table id="Historia"  class="table table-striped table-bordered table-condensed table-hover text-nowrap" style="width:100%" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Cedula</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>Sexo</th>
                                        <th>E. Civil</th>
                                        <th>Telefono</th>
                                        <th>Correo</th>
                                        <th>Direccion</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include("conexion.php");
                                        $t = "SELECT * FROM `historia_medica`";
                                        $y = mysqli_query($conexion,$t);
                                        while ($ver = mysqli_fetch_array($y)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $ver['id_hm'] ?></td>
                                        <td><?php echo $ver['ci'] ?></td>
                                        <td><?php echo $ver['nombre'] ?></td>
                                        <td><?php echo $ver['apellido'] ?></td>
                                        <td><?php echo $ver['fn'] ?></td>
                                        <td><?php echo $ver['sexo'] ?></td>
                                        <td><?php echo $ver['ecivil'] ?></td>
                                        <td><?php echo $ver['telefono'] ?></td>
                                        <td><?php echo $ver['correo'] ?></td>
                                        <td><?php echo $ver['direccion'] ?></td>
                                        
                                        <td>
                                            <!-- BOTON DE EDITAR Y ELIMINAR -->
                                            <a type = "button" href = "#"  title ="Editar" class = "btn btn-primary btn-sm btneditar " ><img src="../images/editar.png" alt="editar"> </a> 
                                            <?php 
                                                if($_SESSION['id_PERFIL'] == "Root"){
                                            ?>
                                                <a type = "button" href="../modulos/php/eliminarhistoria.php?id=<?php echo $ver['id_hm'] ?>" title ="Eliminar" class = "btn btn-danger btn-sm btneliminar "><img src="../images/eliminar.png" alt="Eliminar"> </a>
                                            <?php }?>
                                        </td>
                                    </tr>
                                    <?php
                                     }
                                    ?>
                                </tbody>
                            </table>
                    </div>
                </div> 
            </div>
                          <!-- MODAL REGISTRAR -->
                        <div class="modal fade" id="registrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                           <center><h5 class="modal-title" id="ModaleditarLabel"><b>Agregar Historia</b></h5>
                                    </div>
                                    <div class="modal-body"> 
                                                <form id="regiration_form"  action="../modulos/php/agregarhist.php" method="post">
                                                    <!-- PRIMER FORMULARIO -->
                                                    <fieldset>
                                                        <div class="form group">
                                                            <input type="text" class=" input-sm" id = "nombre" name = "nom" placeholder=" Nombres " required> &nbsp;
                                                            <input type="text" class=" input-sm"  id = "apell" name = "apellidos" placeholder = "Apellidos" required> &nbsp;
                                                            <input type="date" class=" input-sm"  id = "fna" name = "fn" min = "1950-01-01" max = "2050-12-31" value = "1920-01-01" >
                                                        </div> <br>
                                                        <div class="form group">
                                                            <select  class=" input-sm" name="nacio" id ="nac"> 
                                                                <option value="Venezolano">Venezolano</option>
                                                                <option value="Extranjero" selected>Extranjero</option>
                                                            </select> &nbsp;
                                                            <input type = "numer" class=" input-sm" id = "edad" name = "años" placeholder="Edad"> &nbsp;
                                                            <select name="sexo" class=" input-sm"  id ="sex">
                                                                <option value="Masculino">Masculino</option>
                                                                <option value="Femenino" selected>Femenino</option>
                                                            </select> 
                                                        </div> <br>
                                                        <div class="form-group">
                                                            <input type="numer" class=" input-sm" id = "ci" name = "cedula" placeholder="Cedula" required> &nbsp;
                                                            <select name="ecivil2" class=" input-sm" id ="civil">
                                                                    <option value="Estado Civil">Estado Civil</option>
                                                                    <option value="Soltero(a)">Soltero(a)</option>
                                                                    <option value="Casado" selected>Casado(a)</option>
                                                                    <option value="Divorciado(a)" selected>Divorciado(a)</option>
                                                                </select> &nbsp;
                                                            <input type="text" class=" input-sm" id = "telf" name = "telefono" placeholder="Telefono" required> <br>
                                                       </div> <br>
                                                         <div class="form-group">
                                                            <textarea  class="form-control" placeholder="Direcion" id="dir" name = "direcion"></textarea>
                                                         </div> 
                                                         <div class="form-group">
                                                                <input type="email" class="input-sm" name="cor" id="correo" placeholder = "Correo">&nbsp;
                                                                <input type="text" class=" input-sm"  id = "mc" name="cm" placeholder="Motivo de la Consulta" required> &nbsp;
                                                                <input type="text" class="input-sm" id = "enf" name="actual" placeholder="Enfermedad Actual" required> &nbsp;
                                                         </div>
                                                         <div class="form gruop">
                                                            <input type="text" class="input-sm" id="apers" name="pers" placeholder="A. Personales" required> &nbsp;
                                                            <input type="text" class="input-sm" id="anper" name="per" placeholder="A.Familiares" required> &nbsp;
                                                            <input type="text" class=" input-sm" id="hab" name="habitos" placeholder="Habitos" required>
                                                        </div> <br>
                                                        <input type="button" name="data[password]" class="next btn btn-primary" value="Siguiente" />
                                                    </fieldset>
                                                    <!-- PRIMER FORMULARIO -->

                                                    <!-- SEGUNDO FORMULARIO -->
                                                    <fieldset>
                                                        <center><fieldset><p><h4>Examen Funcional</h4></p></fieldset> </center> <br>
                                                        <div class="form-group">
                                                                    <input type="text" class=" input-sm" name="cab" id="cabeza"placeholder = "Cabeza" required>&nbsp;
                                                                    <input type="text" class=" input-sm" name="oidoo" id="oido"placeholder = "Oido" required> &nbsp;
                                                                    <input type="text" class=" input-sm" name="cue" id="cuello" placeholder = "Cuello" required>
                                                        </div>
                                                        <div class="form-gruop">
                                                            <input type="text" class=" input-sm" name="ojoo" id="ojo" placeholder = "Ojo" required> &nbsp;
                                                            <input type="text" class=" input-sm" name="naris" id="Naris" placeholder = "Naris" required> &nbsp;
                                                            <input type="text" class=" input-sm" name="bo" id="boca" placeholder = "Boca" required> <br>
                                                        </div> <br>
                                                        <div class="form-gruop">
                                                            <input type="text" class=" input-sm" name="cardio" id="cardiopul" placeholder = "Cardiopulmonar" required> &nbsp;
                                                            <input type="text" class=" input-sm" name="abd" id="abdomen" placeholder = "Abdomen" required> &nbsp;
                                                            <input type="text" class=" input-sm" name="geni" id="genitales" placeholder = "Genitales" required> 
                                                        </div> <br>
                                                        <div class="form-gruop">
                                                            <center> <input type="text" class=" input-sm" name="extri" id="extrimidades" placeholder = "Extremidades"required > &nbsp;
                                                            <input type="text" class=" input-sm" name="neuro" id="neurologicas" placeholder = "Neurologicas" required> </center>
                                                        </div> <br>
                                                        <div class="form-floating">
                                                            <textarea class="form-control" placeholder="evaluacion" id="Textarea" name = "evaluacion"></textarea>
                                                        </div> <br>
                                                        <div class="form-group">
                                                            <input type="text" class=" input-sm" name="svital" id=" sigvital" placeholder = "Signos Vitales" required> &nbsp;
                                                            <input type="text" class=" input-sm" name="general" id=" generales" placeholder = "Gerenal" required> &nbsp;
                                                            <input type="text" class=" input-sm" name="afectados" id=" afectados" placeholder = "Organos Afectos" required>
                                                        </div> <br> 
                                                        <div class="form-group">
                                                             <input type="text" class=" input-sm" name="impresiones" id=" impresion" placeholder = "Impresion" required> &nbsp;
                                                             <input type="text" class=" input-sm" name="paraclinico" id=" pclinico" placeholder = "Paraclinicos" required> &nbsp;
                                                             <input type="text" class=" input-sm" name="conducta" id=" conduc" placeholder = "Conducta" required>
                                                        </div>
                                                        
                                                        <input type="button" name="previous" class="previous btn btn-default"/>
                                                        <input type="submit" name="submit" id="submit_data"  class="submit btn btn-primary"/>
                                                    </fieldset>
                                                     <!-- SEGUNDO FORMULARIO -->

                                                      <!-- TERCERO FORMULARIO 
                                                    <fieldset>
                                                            <h2>Paso 3: Información de contacto</h2>
                                                        <div class="form-group">
                                                        <label for="mob">Numero Celular</label>
                                                        <input type="text" class="form-control" id="mob" name="data[mob]" placeholder="Numero Celular">
                                                        </div>
                                                        <div class="form-group">
                                                        <label for="address">Direccion</label>
                                                        <textarea  class="form-control" name="data[address]" placeholder="Direccion"></textarea>
                                                        </div>
                                                        <input type="button" name="previous" class="previous btn btn-default" value="Anterior" />
                                                        <input type="submit" name="submit" class="submit btn btn-primary" value="Enviar" id="submit_data" />
                                                    </fieldset> 
                                                    TERCERO FORMULARIO -->
                                                </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- MODAL REGISTRAR 
                        <div class="modal fade" id="efuncionar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                           <center><h5 class="modal-title" id="ModaleditarLabel"><b>Agregar Historia</b></h5>
                                    </div>
                                    <div class="modal-body">
                                            <form action="../modulos/php/agregarhist.php" method="post">
                                              <center><fieldset> 
                                                <div class="form gruop">
                                                    <label for="#">M.Consulta</label>
                                                    <input type="text"  id = "mc" name="cm" placeholder="Motivo de la Consulta" required>
                                                    <label for="#">Enf. Actual</label>
                                                    <input type="text"  id = "enf" name="actual" placeholder="Enfermedad Actual" required>
                                                </div>
                                                <div class="form gruop">
                                                    <label for="#">A. Personales</label>
                                                    <input type="text"  id="anper" name="per" placeholder="A. personales" required>
                                                    <label for="#">A. Familiares</label>
                                                    <input type="text"  id="apers" name="pers" placeholder="A. Personales" required>
                                                </div>
                                                <center><fieldset><p><h4>Examen Funcional</h4></p></fieldset> </center>
                                                <div class="form gruop">
                                                    <label for="#">Cabeza</label>
                                                    <input type="text"  name="cab" id="cabeza"placeholder = "Cabeza" required>
                                                    <label for="#">Oido</label>
                                                    <input type="text"  name="oidoo" id="oido"placeholder = "Oido" required>
                                                </div>
                                                <div class="form gruop">
                                                    <label for="#">Cuello</label>
                                                    <input type="text"  name="cue" id="cuello" placeholder = "Cuello" required>
                                                    <label for="#">Ojo</label>
                                                    <input type="text"  name="ojoo" id="ojo" placeholder = "Ojo" required>
                                                </div>
                                                <div class="form gruop">
                                                    <label for="#">Naris</label>
                                                    <input type="text"  name="naris" id="Naris" placeholder = "Naris" required>
                                                    <label for="#">Boca</label>
                                                    <input type="text"  name="bo" id="boca" placeholder = "Boca" required>
                                                </div>
                                                <div class="form gruop">
                                                    <label for="#">Cardiopulmunar</label>
                                                    <input type="text" name="cardio" id="cardiopul" placeholder = "Cardiopulmonar" required>
                                                    <label for="#">Abdomen</label>
                                                    <input type="text"  name="abd" id="abdomen" placeholder = "Abdomen" required>
                                                </div>
                                                <div class="form gruop">
                                                    <label for="#">Genitales</label>
                                                    <input type="text" name="geni" id="genitales" placeholder = "Genitales" required>
                                                    <label for="#">Extrimidades</label>
                                                    <input type="text"  name="extri" id="extrimidades" placeholder = "Extremidades"required >
                                                </div>
                                                <div class="form gruop">
                                                    <label for="#">Neurologicas</label>
                                                    <input type="text" name="neuro" id="neurologicas" placeholder = "Cuello" required>
                                                </div>
                                                <div class="form-floating">
                                                    <label for="floatingTextarea">Evaluacion</label>
                                                    <textarea class="form-control" placeholder="evaluacion" id="Textarea" name = "evaluacion"></textarea>
                                                </div> </fieldset> </center>
                                                <div class="modal-footer">
                                                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                     <button type="submit" id="btnGuardar" class=" btnGuardar btn btn-primary">Guardar</button>
                                                </div> 
                                            </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div> -->       

                          
        </body>
        <script type="text/javascript">
            $(document).ready(function(){
                var current = 1,current_step,next_step,steps; /* PASOS */
                steps = $("fieldset").length;
                $(".next").click(function(){
                    current_step = $(this).parent();
                    next_step = $(this).parent().next();
                    next_step.show();
                    current_step.hide();
                    setProgressBar(++current);
                });
                $(".previous").click(function(){ /*  FUNCION PARA REGRESAR */
                    current_step = $(this).parent();
                    next_step = $(this).parent().prev();
                    next_step.show();
                    current_step.hide();
                    setProgressBar(--current);
                });
                
            });
</script>
</html>

