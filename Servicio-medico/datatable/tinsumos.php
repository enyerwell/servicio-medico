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
                        <br><br><br><br><br><br>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <center> <button type="button" class=" btnnuevo btn btn-primary" title = "Nuevo Registro" data-toggle="modal" data-target="#registrar"><img src="../images/agregar.png" alt="Agregar"></button>
                                    <a type = "button" href="../modulos/php/pdf/reportinsumo.php" title ="Reporte" class = "btn btn-danger btn-sm btnreporte " target="_blank"><img src="../images/pdf.png" alt="pdf"></a>
                                    <!-- CREACION DE TABLE -->
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
                                               
                                               include ("conexion.php");
                                               $query= "SELECT * FROM `tipo_insumo`";
                                               $resul = mysqli_query($conexion,$query);
                                               while ($most= mysqli_fetch_array($resul)){
                                           ?> 
                                            <tr>
                                                <td><?php echo $most['cod_insumo'] ?></td>
                                                <td><?php echo $most['nombre'] ?></td>
                                                <td><?php echo $most['registrado'] ?></td>
                                                <td><?php echo $most['accions'] ?></td>
                                                <td>
                                                    <!-- BOTON DE EDITAR Y ELIMINAR -->
                                                    <a type = "button" href = "#"  title ="Editar" class = "btn btn-primary btn-sm btneditar " ><img src="../images/editar.png" alt="editar"></a> 

                                                    <a type = "button"  href="../modulos/php/eliminartinsumo.php?id=<?php echo $most['cod_insumo'] ?>" title ="Eliminar" class = "btn btn-danger btn-sm btneliminar "><img src="../images/eliminar.png" alt="Eliminar"> </a>
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
                                    <center><h5 class="modal-title" id="ModaleditarLabel"><b>Nuevo Registro</b></h5>
                                </div>
                                <div class="modal-body">
                                    <form action="../modulos/php/agregartinsumo.php" method="POST">
                                        <div class="form-group">
                                            <center><label for="$">Nombre de Material</label>
                                           <input type="text" class="form-control" id = "nombre" name = "medicamento" placeholder="Medicamento">
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
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" id="btnGuardar" class=" btnGuardar btn btn-primary">Guardar</button>
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
                        <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="editar" aria-hidden="true">
                            <div class="modal-dialog modal-dialig-centered modal-dialog-scrolloable modal-lg " >
                                <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                    <center><h5 class="modal-title" id="ModaleditarLabel"><b>Editar Registro</b></h5>
                                </div>
                                <div class="modal-body">
                                    <form action="../modulos/php/editartinsumo.php" method="POST">
                                        <div class="form-group">
                                            <center> <label for="#">Id</label>
                                            <input type="text" class="form-control" id = "ids" name = "ids" >
                                        </div>
                                        <div class="form-group">
                                            <center><label for="$">Nombre de Material</label>
                                           <input type="text" class="form-control" id = "nombreedit" name = "medicamentoedit" placeholder="Medicamento" >
                                        </div>
                                        <div class="form-group">
                                            <center><label for="#">Registrado por</label> <br>
                                                    <input type="text" class="form-control" name="registraedit" id = "registedit" value="<?php echo $_SESSION['USUARIO']; ?>  " readonly>
                                        </div>
                                            <center><label for="#">Accion</label> <br>
                                                    <input type="text" class="form-control" id = "acioedit" name="accioedit" value="Modificar" readonly>
                                        </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" id="btnGuardar" class=" btnGuardar btn btn-primary">Guardar</button>
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
                        $('#ids').val(datos[0]);
                        $('#nombreedit').val(datos[1]);
                        $('#nombres').val(datos[1]);
                        $('#nombres').val(datos[1]);
                    });
                </script>
</html>