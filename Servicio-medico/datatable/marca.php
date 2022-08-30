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
                <div class="table-responsive">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-12">
                                    <center> <button type="button" class=" btnnuevo btn btn-primary" title = "Nueva Marca" data-toggle="modal" data-target="#Modalagregar">Nuevo</button>
                                    <a type = "button" href="../modulos/php/pdf/reporuser.php" title ="Reporte" class = "btn btn-danger btn-sm btnreporte ">PDF</a>
                                </div>
                                <table id="marca" class="table-striped  table-bordered table table-hover text-nowrap table-responsive " style="width:100%">
                                    <thead class = "text-center">
                                        <th>Id</th>
                                        <th>Marca</th>
                                        <th>Registrado por</th>
                                        <th> Hora y Fecha</th>
                                        <th>Acciones</th>
                                    </thead>
                                    <?php
                                        $rw = "SELECT * FROM `marca`";
                                        $ds = mysqli_query($conexion,$rw);
                                        while ($selec = mysqli_fetch_array($ds)) {
                                    ?>
                                    <tbody>
                                        <td><?php echo $selec['idm'] ?></td>
                                        <td><?php echo $selec['laboratorio'] ?></td>
                                        <td><?php echo $selec['registradom'] ?></td>
                                        <td><?php echo $selec['horam'] ?></td>
                                        <td>
                                             <!-- BOTONES DE EDIDAT Y ELIMINAR -->
                                             <a type = "button" href = "#"  title ="Editar" class = "btn btn-primary btn-sm btneditar " >Editar</a>
                                             <a type = "button" href="../modulos/php/eliminarmarca.php?id=<?php echo $selec['idm'] ?> " title ="Eliminar" class = "btn btn-danger btn-sm btneliminar ">Eliminar </a>
                                        </td>
                                    </tbody>
                                    <?php
                                        }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                    <!--MODAL EDITAR -->
                    <!-- CREADO POR ENYERWELL CALZADILLA -->
                    <!-- MODAL CREAR -->
                    <div class="modal fade modal-responsive" id="Modalagregar" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" data-bs-backdrop="false"  >
                        <div class="modal-dialog center modal-dialig-centered modal-dialog-scrolloable modal-lg "  role="document">
                            <div class="modal-content">
                                    <div class="modal-header">
                                            <div>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                            </div> 
                                            <h5 class="modal-title text-center" id="exampleModalLabel"></h5>
                                       </div>
                                        <div class="modal-body">
                                                <form  id ="formedita" action= "../modulos/php/agregarmarca.php"  method="POST">
                                                        <input type="hidden"  id = "id" name = "id" >
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id = "marca" name = "marca" placeholder="Marca" required>
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
                  <!-- MODAL CRE
           
            </body>
            
</html>