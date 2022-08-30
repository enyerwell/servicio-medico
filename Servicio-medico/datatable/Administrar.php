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
                            <div class="col-lg-12 ">           
                                    <center> <button type="button" class=" btnnuevo btn btn-primary" title = "Nuevo usuario" data-toggle="modal" data-target="#modalagregar"><img src="../images/agregar.png" alt="Agregar"></button>
                                   <!-- <a type = "button" href="../modulos/php/pdf/reporuser.php" title ="Reporte" class = "btn btn-danger btn-sm btnreporte " target="_blank"><img src="../images/pdf.png" alt="pdf"></a>  -->
                                
                                        <table id="Usuarios" class="table-striped  table-bordered table table-hover text-nowrap table-responsive " style="width:5%">
                                            <thead class="text-center">
                                                
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>  
                                                <th>Cedula </th>                               
                                                <th>Correo</th> 
                                                <th>Gerencia</th>
                                                <th>Perfil</th> 
                                                <th>Usuario</th> 
                                                <th>Contraseña</th> 
                                                <th>Registrado por</th>
                                                <th>Accion</th>
                                                <th>Opciones</th>  
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                               
                                                include ("conexion.php");
                                                $query = "SELECT * FROM `usuario` INNER JOIN Gerencia ON usuario.id_gerencia = Gerencia.id_G JOIN perfil ON usuario.id_perfil = perfil.cod order by usuario.id";
                                                $resul = mysqli_query($conexion,$query);
                                                while ($mostrar= mysqli_fetch_array($resul)){
                                            ?>  
                                                <tr>
                                                    <td><?php echo $mostrar['id'] ?></td>
                                                    <td><?php echo $mostrar['Nombre'] ?></td>
                                                    <td><?php echo $mostrar['apellido'] ?></td>
                                                    <td><?php echo $mostrar['cedula'] ?></td>
                                                    <td><?php echo $mostrar['correo'] ?></td>
                                                    <td><?php echo $mostrar['Gerencia'] ?></td>
                                                    <td><?php echo $mostrar['nombre_cargo'] ?></td>
                                                    <td><?php echo $mostrar['usuario'] ?></td>
                                                    <td><?php echo $mostrar['passwordd'] ?></td>
                                                    <td><?php echo $mostrar['resuser'] ?></td>
                                                    <td><?php echo $mostrar['acciuser'] ?></td>
                                                    <td>
                                                        <!-- BOTON DE EDITAR Y ELIMINAR -->
                                                        <a type = "button" href = "#"  title ="Editar" class = "btn btn-primary btn-sm btneditar " ><img src="../images/editar.png" alt="editar"></a> 

                                                        <a type = "button" href="../modulos/php/eliminarusser.php?id=<?php echo $mostrar['id'] ?>" title ="Eliminar" class = "btn btn-danger btn-sm btneliminar "><img src="../images/eliminar.png" alt="Eliminar"> </a>
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
                    <!--MODAL EDITAR -->
                    <div class="modal fade modal-responsive" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" data-bs-backdrop="false"  >
                        <div class="modal-dialog modal-dialig-centered modal-dialog-scrolloable modal-lg "  role="document">
                            <div class="modal-content">
                                       <div class="modal-header">
                                            <div>
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                                <center><h5 class="modal-title" id="ModaleditarLabel"><b>Editar Usuario</b></h5>
                                            </div> 
                                       </div>
                                        <div class="modal-body">
                                                <form  id ="formedita" action="../modulos/php/modaleditar.php"  method="POST">
                                                        <div class="form-group">
                                                            <center> <label for="#">Id</label>
                                                            <input type="text" class="form-control" id = "idedit" name = "idedit" >
                                                        </div>
                                                    <div class="form-group">
                                                    <center> <label for="#">Nombre</label>
                                                        <input type="text" class="form-control" id = "nombreedit" name = "nombreedit" >
                                                    </div> 
                                                    <div class="form-group">
                                                        <center> <label for="#">Apellido</label>
                                                        <input type="text" class="form-control" id = "apellidoedit" name = "apellidoedit" >
                                                    </div> 
                                                    <div class="form-group">
                                                        <center> <label for="#">C.I.</label>
                                                        <input type="text" class="form-control" id = "cedulaedit" name = "cedulaedit" >
                                                    </div> 
                                                    <div class="form-group">
                                                         <center> <label for="#">Correo</label>
                                                        <input type="text" class="form-control" id = "correoedit" name = "correoedit">
                                                    </div>
                                                    <div class="form-group ">
                                                             <center> <label for="#">Gerencia</label>
                                                            <select class="form-select  form-control" aria-label=".form-select-sm example" name="gerenciaedit" id = "gerenciaedit" >
                                                                <?php 
                                                                    $consulta="SELECT * FROM `Gerencia`";
                                                                    $respuesta=mysqli_query($conexion,$consulta);
                                                                    while($row = mysqli_fetch_assoc($respuesta)){ ?>
                                                                    <option value="<?php echo $row['Id_G']; ?>"> <?php  echo $row['Gerencia']; ?></option>
                                                                    <?php 
                                                                        }
                                                                    ?> 
                                                            </select>
                                                    </div> 
                                                    <div class="form-group ">
                                                            <center> <label for="#">Perfil</label>
                                                            <select class="form-select form-select-sm forn form-control" aria-label=".form-select-sm example" name="perfiledit" id="perfiledit">
                                                                <?php 
                                                                    $consulta="SELECT * FROM `perfil`";
                                                                    $respuesta=mysqli_query($conexion,$consulta);
                                                                    while($row = mysqli_fetch_assoc($respuesta)){ ?>
                                                                    <option value="<?php echo $row['cod']; ?>"> <?php  echo $row['nombre_cargo']; ?></option>
                                                                    <?php 
                                                                        }
                                                                    ?>
                                                            </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <center> <label for="#">Perfil</label>
                                                        <input type="text" class="form-control" id = "usuarioedit" name = "usuarioedit" >
                                                    </div>
                                                    <div class="form-group">
                                                        <center> <label for="#">Contraseña</label>
                                                        <input type="text" class="form-control" id = "contraseñaedit" name = "contraseñaedit" placeholder="Contraseñaedit">
                                                    </div>
                                                    <div class="form-group">
                                                        <center><label for="#">Registrado por</label> 
                                                                <input type="text" class="form-control"  id = "registra" name="registrado" value="<?php echo $_SESSION['USUARIO']; ?> " readonly>
                                                    </div>
                                                    <div class="form-group">
                                                            <center><label for="#">Accion</label>
                                                                    <input type="text" class="form-control" id = "accionss" name="accions" value="Editar" readonly>
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

<!--MODAL EDITAR -->

                    <!-- CREADO POR ENYERWELL CALZADILLA -->
                    <!-- MODAL CREAR -->
                    <div class="modal fade modal-responsive" id="modalagregar" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" data-bs-backdrop="false"  >
                        <div class="modal-dialog modal-dialig-centered modal-dialog-scrolloable modal-lg "  role="document">
                            <div class="modal-content">
                                       <div class="modal-header">
                                            <div>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                    <center><h5 class="modal-title" id="ModaleditarLabel"><b>Nuevo Registro</b></h5>
                                            </div> 
                                       </div>
                                        <div class="modal-body">
                                                <form action="../modulos/php/agregarusser.php"  id ="formedita"   method="POST">
                                                    <div class="form-group">
                                                         <center><label for="#">Nombre</label>
                                                        <input type="text" class="form-control" id = "nombre" name = "nombre" placeholder="Nombre" required>
                                                    </div> 
                                                    <div class="form-group">
                                                         <center><label for="#">Apellifo</label>
                                                        <input type="text" class="form-control" id = "apellido" name = "apellido" placeholder="Apellido" required>
                                                    </div> 
                                                    <div class="form-group">
                                                        <center><label for="#">Cedula</label>
                                                        <input type="text" class="form-control" id = "cedula" name = "cedula" placeholder="Cedula" required>
                                                    </div> 
                                                    <div class="form-group">
                                                         <center><label for="#">Correo</label>
                                                        <input type="text" class="form-control" id = "correo" name = "correo" placeholder="Correo" required >
                                                    </div>
                                                    <div class="form-group ">
                                                            <center><label for="#">Gerencia</label>
                                                            <select class="form-select  form-control" aria-label=".form-select-sm example" name="gerencia" id="gerencia" required>
                                                                <?php 
                                                                    $consulta="SELECT * FROM `Gerencia`";
                                                                    $respuesta=mysqli_query($conexion,$consulta);
                                                                    while($row = mysqli_fetch_assoc($respuesta)){ ?>
                                                                    <option value="<?php echo $row['Id_G']; ?>"> <?php  echo $row['Gerencia']; ?></option>
                                                                    <?php 
                                                                        }
                                                                    ?>
                                                            </select>
                                                    </div> 
                                                    <div class="form-group ">
                                                            <center><label for="#">Perfil</label>
                                                            <select class="form-select form-select-sm forn form-control" aria-label=".form-select-sm example" name="perfil" id="perfil" required>
                                                                <?php 
                                                                    $consulta="SELECT * FROM `perfil`";
                                                                    $respuesta=mysqli_query($conexion,$consulta);
                                                                    while($row = mysqli_fetch_assoc($respuesta)){ ?>
                                                                    <option value="<?php echo $row['cod']; ?>"> <?php  echo $row['nombre_cargo']; ?></option>
                                                                    <?php 
                                                                        }
                                                                    ?>
                                                            </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <center><label for="#">Usuario</label>
                                                        <input type="text" class="form-control" id = "usuario" name = "usuario" placeholder="Usuario" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <center><label for="#">Contraseña</label>
                                                        <input type="text" class="form-control" id = "contraseña" name = "contraseña" placeholder="Contraseña" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <center><label for="#">Registrado por</label> <br>
                                                                <input type="text" class="form-control"  id = "registrado17" name="registrado18" value="<?php echo $_SESSION['USUARIO']; ?> " readonly>
                                                    </div>
                                                    <div class="form-group">
                                                            <center><label for="#">Accion</label> <br>
                                                                    <input type="text" class="form-control" id = "accionss17" name="accions18" value="Registrar" readonly>
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
                 <!-- MODAL ELIMINAR -->
                 <div class="modal fade modal-responsive" id="modaeliminar" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" data-bs-backdrop="false"  >
                        <div class="modal-dialog modal-dialig-centered modal-dialog-scrolloable modal-lg "  role="document">
                            <div class="modal-content">
                                       <div class="modal-header">
                                            <div>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            </div> 
                                            <h5 class="modal-title text-center" id="exampleModalLabel"></h5>
                                       </div>
                                        <div class="modal-body">
                                                <form  id ="formedita" action="../modulos/php/eliminaruser.php"  method="POST">
                                                        ¿Esta seguro que desea borrar el registro? 
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" id="btnGuardar" class=" btnGuardar btn btn-primary">Guardar</button>
                                                    </div> 
                                                </form>
                                        </div>  
                            </div> 
                        </div>
                </div>
                 <!-- MODAL ELIMINAR -->
                <!-- CREADO POR ENYERWELL CALZADILLA -->
                <script>
                   
               </script>

        </body>  
                                      <script>
                                            $('.btneditar').on('click' ,function(){
                                                $tr=$(this).closest('tr');
                                                var datos=$tr.children("td").map(function(){
                                                    return $(this).text();
                                                });
                                                $("#modaleditar").modal("show"); 
                                                $('#idedit').val(datos[0]);
                                                $('#nombreedit').val(datos[1]);
                                                $('#apellidoedit').val(datos[2]);
                                                $('#cedulaedit').val(datos[3]);
                                                $('#correoedit').val(datos[4]);
                                                $('#gerenciaedit').val(datos[5]);
                                                $('#perfiledit').val(datos[6]);
                                                $('#usuarioedit').val(datos[7]);
                                                $('#contraseñaedit').val(datos[8]);
                                                $('#contraseñaedit').val(datos[8]);
                                                $('#contraseñaedit').val(datos[8]);

                                            });
                                    </script>
    
</html>   
                                        
        