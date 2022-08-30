<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
    <div class="card-body">
         <br><br><br><br><br><br>
                <div class="table-responsive">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="col-lg-12 ">            
                                    <center> <button type="button" class=" btnnuevo btn btn-primary" title = "Nuevo usuario" data-toggle="modal" data-target="#modalagregar">Nuevo</button>
                                    <a type = "button" href="../modulos/php/pdf/reporuser.php" title ="Reporte" class = "btn btn-danger btn-sm btnreporte ">PDF</a>
                                </div> 
                                        <table id="Usuarios" class="table-striped  table-bordered table table-hover text-nowrap table-responsive " style="width:50%">
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
                                                <th>Acciones</th>  
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                               
                                                include ("conexion.php");
                                                $query = "SELECT * FROM `usuario` 
                                                                   INNER JOIN Gerencia ON usuario.id_gerencia = Gerencia.id_G 
                                                                   JOIN perfil ON usuario.id_perfil = perfil.cod order by usuario.id";
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
                                                    <td><?php echo $mostrar['nombre'] ?></td>
                                                    <td><?php echo $mostrar['usuario'] ?></td>
                                                    <td><?php echo $mostrar['passwordd'] ?></td>
                                                    <td>
                                                        <!-- BOTON DE EDITAR Y ELIMINAR -->
                                                        <a type = "button" href = "#"  title ="Editar" class = "btn btn-primary btn-sm btneditar " >Editar</a>

                                                        <a type = "button" href="../modulos/php/eliminarusser.php?id=<?php echo $mostrar['id'] ?>" title ="Eliminar" class = "btn btn-danger btn-sm btneliminar ">Eliminar </a>
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
    
</div>