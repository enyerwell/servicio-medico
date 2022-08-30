    <!DOCTYPE html>
    <html lang="es">  
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
                     <!-- CREADO POR ENYERWELL CALZADILLA -->
                    <div class="table-responsive">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                                <div class="col-lg-12">            
                                                        <center> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modalagregar"><img src="../images/agregar.png" alt="Agregar"></button>
                                                        <a type = "button" href="../modulos/php/pdf/reporinsu.php" title ="Reporte" class = "btn btn-danger btn-sm btnreporte " target="_blank"><img src="../images/pdf.png" alt="pdf"></a>
                                                </div> 
                                            <table id="insumos" class="table-striped table-bordered table table-hover text-nowrap " style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Fecha Entrada</th> 
                                                            <th>Nombre</th>  
                                                            <th>Cantidad </th> 
                                                            <th>Registrado por</th>                             
                                                            <th>Acciones</th>
                                                            <th>opciones</th> 
                                                            <th>Cantidad</th>
                                                            <th>Modificar</th>
                                                        </tr>
                                                    </thead>
                                                <tbody>
                                                    <?php 
                                                        include("conexion.php");
                                                        $Query = "SELECT * FROM `insumos` INNER JOIN tipo_insumo ON insumos.cod_insumo = tipo_insumo.cod_insumo ";
                                                        $res = mysqli_query($conexion,$Query);
                                                        while ($capturar = mysqli_fetch_array($res)) {
                                                    ?>
                                                 
                                                    <tr>
                                                        <td><?php echo $capturar['id'] ?></td>
                                                        <td><?php echo $capturar['f_entrega'] ?></td>
                                                        <td><?php echo $capturar['nombre'] ?></td>
                                                        <td><?php echo $capturar['cantidad'] ?></td>
                                                        <td><?php echo $capturar['registro1'] ?></td>
                                                        <td><?php echo $capturar['acciones'] ?></td>
                                                        <td>
                                                                    <!-- BOTON DE EDITAR -->
                                                                    <a type = "button" href = "#"  title ="Editar" class = "btn btn-primary btn-sm btneditar " ><img src="../images/editar.png" alt="editar"></a>
                                                                    <!-- BOTON DE EDITAR -->

                                                                    <!-- BOTON  ELIMINAR -->
                                                                    <a type = "button" href="../modulos/php/eliminarinsuno.php?id=<?php echo $capturar['id'] ?>" title ="Eliminar" class = "btn btn-danger btn-sm btneliminar "><img src="../images/eliminar.png" alt="Eliminar">  </a>
                                                                    <!-- BOTON DE ELIMINAR -->
                                                        </td>
                                                        <td>
                                                                    <!-- BOTON DE CANTIDAD -->
                                                                    <a type = "button" href = "../modulos/php/pdf/reporinsuininv.php?id=<?php echo $capturar['id'] ?> "  title ="Editar" class = "btn btn-success btn-sm btnstop " target="_blank" ><?php echo $capturar['cantidad'] ?></a>
                                                                    <!-- BOTON DE EDITAR -->
                                                        </td>
                                                        <!-- BOTONES DE INCREMENTAR Y DECREMENTAR --> 
                                                        <td>
                                                            <a type = "button" href = "#"  title ="Incrementar" class = "btn btn-warning btn-sm btnmas " ><b><img src="../images/inc.png" alt="incrementar"></b></a>

                                                            <a type = "button" href = "#"  title ="Decrementar" class = "btn btn-info btn-sm btnmenos "> <b><img src="../images/dis.png" alt="incrementar"></b></a>
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
                     </div>

                <!-- MODAL AGREGAR --> 
                <!-- CREADO POR ENYERWELL CALZADILLA -->
                <div class="modal fade" id="Modalagregar" tabindex="-1" role="dialog" aria-labelledby="ModaleditarLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-dialig-centered modal-dialog-scrolloable modal-lg " role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                <center><h5 class="modal-title" id="ModaleditarLabel"><b>Nuevo Registro</b></h5>

                            </div>
                            <div class="modal-body">
                                <form action="../modulos/php/agregarinsumos.php" method="POST">
                                    <input type="hidden"  id = "id" name = "id" >
                                    <div class="form-group">
                                        <center><label for="#">Fecha </label>
                                        <input type="date" class="form-control" name="fno" id = "fn" step="1" min="2022-01-01" max="2050-12-31" value="2022-01-01" placeholder="Fecha de Entrada" required>
                                    </div>
                                    <div class="form-group">
                                            <center><label for="#">Insumo</label>
                                           <select class="form-select  form-control" aria-label=".form-select-sm example" name = "tinsumo" id="tinsumo"  placeholder="Tipo de Insumo"required>
                                                <?php 
                                                    $consulta="SELECT * FROM `tipo_insumo`";
                                                    $respuesta=mysqli_query($conexion,$consulta);
                                                    while($row = mysqli_fetch_assoc($respuesta)){ ?>
                                                    <option value="<?php echo $row['cod_insumo']; ?>"> <?php  echo $row['nombre']; ?></option>
                                                    <?php 
                                                         } 
                                                    ?>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <center><label for="#">Cantidad</label>
                                        <input type="text" class="form-control" id = "cantidad" name = "cantidad" placeholder="Cantidad" required>
                                    </div>
                                    <div class="form-group">
                                        <center><label for="#">Registrado por</label> <br>
                                                <input type="text" class="form-control"id = "regis" name="regist" value="<?php echo $_SESSION['USUARIO']; ?> " readonly>
                                    </div>
                                    <div class="form-group">
                                        <center><label for="#">Accion</label> <br>
                                                <input type="text" class="form-control" id = "accion" name="acciones" value="<?php echo "Registrar"; ?> " readonly>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" id="btnGuardar" class=" btnGuardar btn btn-danger">Guardar</button>
                                    </div>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL AGREGAR -->
                <!-- CREADO POR ENYERWELL CALZADILLA -->

                <!-- CREADO POR ENYERWELL CALZADILLA --> 
                <!-- MODAL EDITAR --> 
                <div class="modal fade" id="Modaleditar" tabindex="-1" role="dialog" aria-labelledby="ModaleditarLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-dialig-centered modal-dialog-scrolloable modal-lg " role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <div>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                        <center><h5 class="modal-title" id="ModaleditarLabel"><b>Editar Registro</b></h5>
                                </div>
                            </div>
                            <div class="modal-body">
                                <form action="../modulos/php/editarinsumos.php" id = "formedita" name = "formedita"  method="POST">
                                <div class="form group">
                                        <center><label for="#">Id</label>
                                        <input type="text" class="form-control"  id = "ids" name = "ids" readonly>
                                    </div> <br>
                                   <div class="form-group">
                                        <center><label for="#">Fecha </label>
                                        <input type="date" class="form-control" name="fnoedit" id = "fnedit" step="1" min="2022-01-01" max="2050-12-31" value="2022-01-01" placeholder="Fecha de Entrada" required>
                                    </div>
                                   
                                    <div class="form-group">
                                           <center> <label for="#">Material</label>
                                            <select class="form-select  form-control" aria-label=".form-select-sm example" name = "tinsumo" id="tinsumo"  placeholder="Tipo de Insumo"required>
                                                        <?php 
                                                            $consulta="SELECT * FROM `tipo_insumo`";
                                                            $respuesta=mysqli_query($conexion,$consulta);
                                                            while($row = mysqli_fetch_assoc($respuesta)){ ?>
                                                            <option value="<?php echo $row['cod_insumo']; ?>"> <?php  echo $row['nombre']; ?></option>
                                                            <?php 
                                                                } 
                                                            ?>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                      <center>  <label for="#">Cantidad</label>
                                        <input type="text" class="form-control" id = "cantidadedit" name = "cantidadedit" placeholder="Cantida" required>
                                    </div>
                                    <div class="form-group">
                                        <center><label for="#">Registrado por</label> <br>
                                                <input type="text" class="form-control" id = "registradoedit" name="registradoedit" value="<?php echo $_SESSION['USUARIO']; ?> " readonly>
                                    </div>
                                    <div class="form-group">
                                        <center><label for="#">Accion</label> <br>
                                                <input type="text" class="form-control" name="accionedit" value="Modificar" readonly>
                                    </div>
                                         <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" id="btnGuardar" class=" btnGuardar btn btn-danger">Guardar</button>
                                    </div>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MODAL EDITAR -->
                <!-- CREADO POR ENYERWELL CALZADILLA -->

                 <!-- CREADO POR ENYERWELL CALZADILLA --> 
                <!-- MODAL INCREMENTAR -->
                <div class="modal fade" id="Modalincre" tabindex="-1" role="dialog" aria-labelledby="ModaleditarLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-dialig-centered modal-dialog-scrolloable modal-lg " role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <div>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                        <center><h5 class="modal-title" id="ModaleditarLabel"><b>Incrementar Registro</b></h5>
                                </div>
                            </div>
                            <div class="modal-body">
                                <form id = "formincre" name = "formeincre" action="../modulos/php/increinsu.php" method="POST">
                                    <div class="form-group">
                                        <center><label for="#">Id</label>
                                        <input type="hiddn"  class="form-control" id = "idinc" name = "IDinc" readonly>
                                    </div>
                                    <div class="form-group">
                                        <center><label for="#">Fecha </label>
                                        <input type="text" class="form-control" name="fnoincre" id = "fnincre" placeholder="Fecha de Entrada" readonly>
                                    </div>
                                    <div class="form-group">
                                       <center><label for="#">Insumo</label>
                                              <input type="text" class="form-control" id = "tinsumoincre" name = "tinsumoincre" placeholder="Insumo" readonly>
                                    </div>
                                    <div class="form-group">
                                        <center><label for="#">Cantidad a Actual</label>
                                               <input type="text"  class="form-control" id = "cantidaincre" name = "cantidaincre" placeholder="Cantida" readonly>
                                    </div>
                                    <div class="form-group">
                                       <center><label for="#">Cantidad a Incrementar</label>
                                               <input type="text" class="form-control" id = "incrementa" name = "incrementa" placeholder="Cantida a Incrementar" required>
                                    </div>
                                    <div class="form-group">
                                        <center><label for="#">Registrado por</label> <br>
                                                <input type="text" class="form-control" id = "registradoincre" name="registradoincre" value="<?php echo $_SESSION['USUARIO']; ?> " readonly>
                                    </div>
                                    <div class="form-group">
                                        <center><label for="#">Accion</label> <br>
                                                <input type="text" class="form-control" id = "accioneincre" name="accioneincre" value="Incrementar" readonly>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" id="btnGuardar" class=" btnGuardar btn btn-danger">Guardar</button>
                                    </div>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                  <!-- MODAL INCREMENTAR -->
                  <!-- CREADO POR ENYERWELL CALZADILLA --> 

                  <!-- CREADO POR ENYERWELL CALZADILLA --> 
                <!-- MODAL DECREMENTAR -->
                <div class="modal fade" id="Modaldec" tabindex="-1" role="dialog" aria-labelledby="ModaleditarLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-dialig-centered modal-dialog-scrolloable modal-lg " role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <div>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                <center><h5 class="modal-title" id="ModaleditarLabel"><b>Decrementar Registro</b></h5>
                                </div>
                            </div>
                            <div class="modal-body">
                                <form id = "formdec" name = "formdec" action="../modulos/php/decinsu.php" method="POST">
                                    <div class="form-group">
                                        <center><label for="#">Id</label>
                                        <input type="text" class="form-control"  id = "iddec" name = "IDdec" readonly>
                                    </div>
                                    <div class="form-group">
                                        <center><label for="#">Fecha </label>
                                        <input type="text" class="form-control" name="fnodec" id = "fndec" placeholder="Fecha de Entrada" readonly>
                                    </div>
                                    <div class="form-group">
                                    <center><label for="#">Insumo</label>
                                           <input type="text" class="form-control" id = "tinsumodec" name = "tinsumodec" placeholder="Insumo" readonly>
                                    </div>
                                    <div class="form-group">
                                        <center><label for="#">Cantidad Actual</label>
                                        <input type="text"  class="form-control" id = "cantidaddec" name = "cantidaddec" placeholder="Cantida" readonly>
                                    </div>
                                    <div class="form-group">
                                       <center><label for="#">Cantidad a Decrementar</label>
                                        <input type="text" class="form-control" id = "disminuir" name = "disminuir" placeholder="Cantida a Disminuir" required>
                                    </div>
                                    <div class="form-group">
                                        <center><label for="#">Registrado por</label> <br>
                                                <input type="text" class="form-control" id = "registradodec" name="registradodec" value="<?php echo $_SESSION['USUARIO']; ?> " readonly>
                                    </div>
                                    <div class="form-group">
                                        <center><label for="#">Accion</label> <br>
                                                <input type="text" class="form-control" id = "accionedec" name="accionedec" value="Decremendat" readonly>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" id="btnGuardar" class=" btnGuardar btn btn-danger">Guardar</button>
                                    </div>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                  <!-- CREADO POR ENYERWELL CALZADILLA --> 
            
                    <script>
                        $('.btneditar').on('click' ,function(){
                        $tr=$(this).closest('tr');
                        var datos=$tr.children("td").map(function(){
                        return $(this).text();
                         });
                        $("#Modaleditar").modal("show"); 
                        $('#ids').val(datos[0]);
                        $('#fndinc').val(datos[2]);
                        $('#tinsumodec').val(datos[3]);
                        $('#cantidadedit').val(datos[3]);
                        $('#registradoedit').val(datos[4]);
                        
                        });
                    </script>

                    <!-- SCRIPT INCREMENTAR -->
                    <script>
                        $('.btnmas').on('click' ,function(){
                        $tr=$(this).closest('tr');
                        var datos=$tr.children("td").map(function(){
                        return $(this).text();
                         });
                        $("#Modalincre").modal("show"); 
                        $('#idinc').val(datos[0]);
                        $('#fnincre').val(datos[1]);
                        $('#tinsumoincre').val(datos[2]);
                        $('#cantidaincre').val(datos[3]);
                        });
                    </script>

                    <!-- SCRIPT DECREMENTAR -->
                    <script>
                        $('.btnmenos').on('click' ,function(){
                        $tr=$(this).closest('tr');
                        var datos=$tr.children("td").map(function(){
                        return $(this).text();
                         });
                        $("#Modaldec").modal("show"); 
                        $('#iddec').val(datos[0]);
                        $('#fndec').val(datos[1]);
                        $('#tinsumodec').val(datos[2]);
                        $('#cantidaddec').val(datos[3]);
                        
                        });
                    </script>

                    


            </body> 
           
          
    </html>  
    