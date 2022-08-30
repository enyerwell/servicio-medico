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
            <br><br><br><br><br><br>
            <div class="container">
                <div class="row">
                    <div class=" col-lg-12">
                        <center> <button type="button" class=" btnnuevo btn btn-primary" title = "Agregar" data-toggle="modal" data-target="#registrar"><img src="../images/agregar.png" alt="Agregar"></button>
                        <a type = "button" href="../modulos/php/pdf/tmaterial.php" title ="Reporte" class = "btn btn-danger btn-sm btnreporte " target="_blank"><img src="../images/pdf.png" alt="pdf"></a>
                        
                        <table id="tmaterial" class="table-striped  table-bordered table table-hover text-nowrap table-responsive " style="width:90%">
                           <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Medicamento</th>
                                    <th>Registrado por</th>
                                    <th>Acciones</th>
                                    <th>Opciones</th>
                                </tr>
                           </thead>
                           <tbody>
                            <?php
                                include("conexion.php");
                                $query = "SELECT * FROM tipo_de_material";
                                $r = mysqli_query($conexion,$query);
                                while ($ver = mysqli_fetch_array($r)) {
                            ?>
                             <tr>
                                <td><?php echo $ver['cod_tmaterial'] ?></td>
                                <td><?php echo $ver['medicamento'] ?></td>
                                <td><?php echo $ver['registrado por'] ?></td>
                                <td><?php echo $ver['accion'] ?></td>
                                <td>
                                    <!-- BOTON DE EDITAR Y ELIMINAR -->
                                    <a type = "button" href = "#"  title ="Editar" class = "btn btn-primary btn-sm btneditar" ><img src="../images/editar.png" alt="editar"> </a> 
                                    <a type = "button" href="../modulos/php/eliminartmaterial.php?id=<?php echo $ver['cod_tmaterial'] ?>" title ="Eliminar" class = "btn btn-danger btn-sm btneliminar "><img src="../images/eliminar.png" alt="Eliminar">  </a>
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
                 <!-- CREADO POR ENYERWELL CALZADILLA -->
                        <!-- MODAL REGISTRAR -->
                        <div class="modal fade" id="registrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialig-centered modal-dialog-scrolloable modal-lg " >
                                <div class="modal-content">
                                <div class="modal-header">
                                           <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                           <center><h5 class="modal-title" id="ModaleditarLabel"><b>Agregar Insumo</b></h5>
                                </div>
                                <div class="modal-body">
                                    <form action="../modulos/php/agregartmaterial.php" method="POST">
                                         <div class="form-group">
                                            <center><label for="#">Material</label> <br>
                                                    <input type="text" class="form-control" id = "medic" name = "material" placeholder="Insumo">
                                         </div>
                                            <div class="form-group">
                                                <center><label for="#">Registrado por</label> <br>
                                                        <input type="text" class="form-control" name="registrado" value="<?php echo $_SESSION['USUARIO']; ?>  " readonly>
                                            </div>
                                                <div class="form-group">
                                                    <center><label for="#">Accion</label> <br>
                                                            <input type="text" class="form-control" name="accion" value="Registrar" readonly>
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
                        <!-- MODAL REGISTRAR -->
                        <!-- CREADO POR ENYERWELL CALZADILLA -->

                        <!-- CREADO POR ENYERWELL CALZADILLA -->
                        <!-- MODAL EDITAR -->
                        <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialig-centered modal-dialog-scrolloable modal-lg " >
                                <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                           <center><h5 class="modal-title" id="ModaleditarLabel"><b>Editar Material</b></h5>
                                </div>
                                <div class="modal-body">
                                    <form action="../modulos/php/editartmaterial.php" method="POST">
                                    <div class="form-group">
                                            <center><label for="#">Id</label> <br>
                                            <input type="text"  class="form-control" id = "idS" name = "idS" readonly >
                                         </div>
                                        <div class="form-group">
                                            <center><label for="#">Material</label> <br>
                                                    <input type="text" class="form-control" id = "medicS" name = "materialS" placeholder="Material" >
                                         </div>
                                         <div class="form-group">
                                                <center><label for="#">Registrado por</label> <br>
                                                        <input type="text" class="form-control" id = "registradoS" name="registradoS" value="<?php echo $_SESSION['USUARIO']; ?>  " readonly>
                                            </div>
                                            <div class="form-group">
                                                    <center><label for="#">Accion</label> <br>
                                                            <input type="text" class="form-control" id = "accionS" name="accionS" value="Modificar" readonly>
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
        </body>
        <script>
            $('.btneditar').on('click' ,function()
            {
                $tr=$(this).closest('tr');
                var datos=$tr.children("td").map(function()
                {
                     return $(this).text();
                });
                $("#editar").modal("show"); 
                $('#idS').val(datos[0]);
                $('#medicS').val(datos[1]);
                $('#registradoS').val(datos[2]);
            });
        </script>
</html> 