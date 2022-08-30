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
            <!-- CREADO POR ENYERWELL CALZADILLA -->
            <br><br><br><br><br><br>
            <div class="table-responsive">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-12">
                                <center> <button type="button" class=" btnnuevo btn btn-primary" title = "Nuevo UInidad" data-toggle="modal" data-target="#Modalagregar">Nuevo</button>
                                <a type = "button" href="../modulos/php/pdf/reporuni.php" title ="Reporte" class = "btn btn-danger btn-sm btnreporte ">PDF</a>
                            </div>
                            <table  id="unidad" class="table-striped  table-bordered table table-hover text-nowrap table-responsive " style="width:100%">
                                <thead>
                                    <th>Id</th>
                                    <th>Unidad</th>
                                    <th>Registrado por</th>
                                    <th>hora</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody>
                                <?php 
                                    include ("conexion.php");
                                    $con = "SELECT * FROM `unidad`"; 
                                    $xcon = mysqli_query($conexion,$con);
                                    while ($cat = mysqli_fetch_array($xcon)) {
                                ?>
                                   <tr>
                                            <td><?php echo $cat['idu'] ?></td>
                                            <td><?php echo $cat['unidad'] ?></td>
                                            <td><?php echo $cat['registrado'] ?></td>
                                            <td><?php echo $cat['horau'] ?></td>
                                            <td>
                                                <!-- BOTONES DE EDITAR Y ELIMINAR -->
                                                <a type = "button" href = "#"  title ="Editar" class = "btn btn-primary btn-sm btneditar " >Editar</a>
                                                <a type = "button" href="../modulos/php/eliminarunidad.php?id=<?php echo $cat['idu'] ?>" title ="Eliminar" class = "btn btn-danger btn-sm btneliminar ">Eliminar </a>
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
             <!-- MODAL DE AGREGAR -->
             <div class="modal fade modal-responsive" id="Modalagregar" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" data-bs-backdrop="false" >
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Registrar Marco</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="post">

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                    </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
                <!-- MODAL DE AGREGAR -->

            <!-- MODAL AGREGAR -->
        </body>
 </html>