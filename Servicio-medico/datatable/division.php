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
            
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                                    <center> <button type="button" class=" btnnuevo btn btn-primary" title = "Nuevo usuario" data-toggle="modal" data-target="#modalagregar"><img src="../images/agregar.png" alt="Agregar"></button>
                                   <!-- <a type = "button" href="../modulos/php/pdf/repordivision.php" title ="Reporte" class = "btn btn-danger btn-sm btnreporte " target="_blank"><img src="../images/pdf.png" alt="pdf"></a> -->
                                    <table id="Division" class="table-striped  table-bordered table table-hover text-nowrap table-responsive " style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Division</th>
                                                <th>Registrado por</th>
                                                <th>Accion</th> 
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include ("conexion,php");
                                            $con = "SELECT * FROM `Division`";
                                            $res = mysqli_query($conexion,$con);
                                            while ($division = mysqli_fetch_array($res)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $division['id_D'] ?></td>
                                                <td><?php echo $division['Division'] ?></td>
                                                <td><?php echo $division['registrodiv'] ?></td>
                                                <td><?php echo $division['acciondiv'] ?></td>
                                                <td>
                                                    <!-- BOTON DE EDITAR Y ELIMINAR -->
                                                    <a type = "button" href = "#"  title ="Editar" class = "btn btn-primary btn-sm btneditar " ><img src="../images/editar.png" alt="editar"></a>

                                                    <a type = "button" href="../modulos/php/eliminardiv.php?id=<?php echo $division['id_D'] ?>" title ="Eliminar" class = "btn btn-danger btn-sm btneliminar "><img src="../images/eliminar.png" alt="Eliminar"> </a>
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

                   <!-- MODAL AGREGAR REGISTRO   -->
                   <!-- CREADO POR ENYERWELL CALZADILLA  -->

                <div class="modal fade" id="modalagregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialig-centered modal-dialog-scrolloable modal-lg "  role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <div>
                                   <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                   <h5 class="modal-title text-center" id="Modalagregar"> <b>Agregar Division</b> </h5>
                                </div> 
                        </div>
                        <div class="modal-body">
                                <form id = "" action="../modulos/php/agregardir.php"  method="POST">
                                        <div class="form-group">
                                             <center><label for="#">Divisiòn</label> <br>
                                                     <input type="text" class="form-control" id = "division" name = "division" placeholder="Division" required>
                                        </div> 
                                        <div class="form-group">
                                                <center><label for="#">Registrado por</label> <br>
                                                        <input type="text" class="form-control" name="registrado" value="<?php echo $_SESSION['USUARIO']; ?> " readonly>
                                        </div>
                                        <div class="form-group">
                                                <center><label for="#">Accion</label> <br>
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
                   <!-- MODAL AGREGAR REGISTRO   -->
                   <!-- CREADO POR ENYERWELL CALZADILLA  -->

                   <!-- MODAL AGREGAR REGISTRO   -->
                   <!-- CREADO POR ENYERWELL CALZADILLA  -->

                <div class="modal fade" id="modaleditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialig-centered modal-dialog-scrolloable modal-lg "  role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <div>
                                   <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                </div> 
                                <h5 class="modal-title text-center" id="Modalagregar"> Editar Division</h5>
                        </div>
                        <div class="modal-body">
                                <form id = "" action="../modulos/php/editardiv.php"  method="POST">
                                    <div class="form-group">
                                        <center> <label for="#">Id</label>
                                        <input type="text" class="form-control"   id = "id20a" name = "id20a" readonly>
                                    </div>
                                        <div class="form-group">
                                            <center> <label for="#">Division </label>
                                            <input type="text" class="form-control" id = "division20a" name = "division20a" placeholder="Division" required>
                                        </div> 
                                        <div class="form-group">
                                                <center><label for="#">Registrado por</label> <br>
                                                        <input type="text" class="form-control" id = "registrado1817" name="registrado18" value="<?php echo $_SESSION['USUARIO']; ?> " readonly>
                                        </div>
                                        <div class="form-group">
                                                <center><label for="#">Accion</label> <br>
                                                        <input type="text" class="form-control" id = "accionss17" name="accions18" value="Editar" readonly>
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
                   <!-- MODAL AGREGAR REGISTRO   -->
                   <!-- CREADO POR ENYERWELL CALZADILLA  -->
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
                $('#id20a').val(datos[0]);
                $('#division20a').val(datos[1]);
                $('#gerencia20a').val(datos[2]);
            });
        </script>
</html>