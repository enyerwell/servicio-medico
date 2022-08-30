<!DOCTYPE html>
<html lang="en">
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
            <br><br><br>
            <div class="card">
                <div class="card-body">
                    <div class="container"> 
                        <div class="row">
                            <div class="col-lg-12">
                                    <center> <button type="button" class=" btnnuevo btn btn-primary" title = "Nuevo usuario" data-toggle="modal" data-target="#modalagregar"><img src="../images/agregar.png" alt="Agregar"></button>
                                    <!-- <a type = "button" href="../modulos/php/pdf/reporgerencia.php" title ="Reporte" class = "btn btn-danger btn-sm btnreporte " target="_blank"><img src="../images/pdf.png" alt="pdf"></a> -->
                                    <table id="Gerencia" class="table-striped  table-bordered table table-hover text-nowrap table-responsive " style="width:90%">
                                        <thead class = "text-center">
                                            <tr>
                                                    <th>Id</th>
                                                    <th>Gerencia</th>
                                                    <th>Registrado por</th>
                                                    <th>Accion</th>
                                                    <th>Opciones</th>
                                            </tr> 
                                        </thead>
                                        <tbody>
                                            <?php   
                                                include ("conexion.php");
                                                $query = "SELECT * FROM `Gerencia`";
                                                $resultado = mysqli_query($conexion,$query);
                                                while ($select= mysqli_fetch_array($resultado)){
                                            ?> 
                                            <tr>
                                                <td><?php echo $select['Id_G'] ?></td>
                                                <td><?php echo $select['Gerencia'] ?></td>
                                                <td><?php echo $select['regis'] ?></td>
                                                <td><?php echo $select['acciosger'] ?></td>
                                                <td>
                                                    <a type = "button" href = "#"  title ="Editar" class = "btn btn-primary btn-sm btneditar " ><img src="../images/editar.png" alt="editar"></a>

                                                    <a type = "button" href="../modulos/php/eliminargerencia.php?id=<?php echo $select['Id_G'] ?>" title ="Eliminar" class = "btn btn-danger btn-sm btneliminar "><img src="../images/eliminar.png" alt="Eliminar">  </a> 
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
            </div>
                <!-- CREADO POR ENYERWELL CALZADILLA -->
                    <!-- MODAL CREAR -->
                    <div class="modal fade modal-responsive" id="modalagregar" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" data-bs-backdrop="false"  >
                        <div class="modal-dialog modal-dialig-centered modal-dialog-scrolloable modal-lg "  role="document">
                            <div class="modal-content">
                                       <div class="modal-header">
                                            <div>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            <center><h5 class="modal-title" id="ModaleditarLabel"><b>Agregar Gerencia</b></h5>
                                            </div> 
                                       </div>
                                        <div class="modal-body">
                                                <form  id ="formedita" action="../modulos/php/agregargerencia.php"  method="POST">
                                                    <div class="form-group">
                                                        <center> <label for="#">Gerencia</label>
                                                        <input type="text" class="form-control" id = "gerencia" name = "gerencia" placeholder="Nombre de Gerencia" required>
                                                    </div> 
                                                    <div class="form-group">
                                                        <center><label for="#">Registrado por</label> <br>
                                                                <input type="text" class="form-control" name="registrado" value="<?php echo $_SESSION['USUARIO']; ?> " readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <center><label for="#">Acciòn</label> <br>
                                                                <input type="text" class="form-control" id = "accionss" name="accions" value="Registrar" readonly>
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
                  <!-- MODAL CREAR -->
                 <!-- CREADO POR ENYERWELL CALZADILLA -->

                  <!-- CREADO POR ENYERWELL CALZADILLA -->
                    <!-- MODAL EDITAT -->
                    <div class="modal fade modal-responsive" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" data-bs-backdrop="false"  >
                        <div class="modal-dialog modal-dialig-centered modal-dialog-scrolloable modal-lg "  role="document">
                            <div class="modal-content">
                                       <div class="modal-header">
                                            <div>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            <center><h5 class="modal-title" id="ModaleditarLabel"><b>Editar Gerencia</b></h5>
                                            </div> 
                                       </div>
                                        <div class="modal-body">
                                                <form  id ="formedita" action="../modulos/php/editargerencia.php"  method="POST">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id = "id05" name = "id05" readonly>
                                                    </div>    
                                                
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id = "gerencia05" name = "gerencia05" placeholder="Nombre de Gerencia" required>
                                                    </div> 
                                                    <div class="form-group">
                                                        <center><label for="#">Registrado por</label> <br>
                                                                <input type="text" class="form-control"  id = "regisedit" name="registradoedit" value="<?php echo $_SESSION['USUARIO']; ?> " readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <center><label for="#">Acciòn</label> <br>
                                                                <input type="text" class="form-control" id = "accionssedit" name="accionsedit" value="Modificar" readonly>
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
                $("#modaleditar").modal("show"); 
                $('#id05').val(datos[0]);
                $('#gerencia05').val(datos[1]);
            });
        </script>
</html>