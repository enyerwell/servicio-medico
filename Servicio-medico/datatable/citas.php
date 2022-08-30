<!DOCTYPE html>
<html lang="es">
<style>
        table.dataTable thead {
            background: linear-gradient(to right, #0013e0, #0013e0);
            color:white;
        }
    </style> 
           
        </head>
          <div class="table-responsive">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        
                    <center>        <div class="col-lg-12">            
                                        <button id="btnNuevo" type="button" class="btn btn-primary"><i class="material-icons">add_box</i></button>    
                                    </div> 
                                <table id="citas" class="table-striped table-bordered table table-hover text-nowrap " style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Historia</th>
                                        <th>Paciente</th> 
                                        <th>Medico</th>
                                        <th>Status</th>  
                                        <th>Acciones</th> 
                                    </tr>
                                    </thead>
                                    <?php
                                        include("conexion.php");
                                        $Que = "SELECT * FROM `cita` INNER JOIN historia_medica ON cita.id_historia = historia_medica.idh JOIN usuario ON cita.id_historia = historia_medica.idh JOIN status ON cita.id_status = status.ide";
                                        $res = mysqli_query($conexion,$Que);
                                        while ($seleccional = mysqli_fetch_array($res)) {
                                        ?>
                                    <tbody>
                                            <tr>
                                                <td><?php echo $seleccional['id'] ?></td>
                                                <td><?php echo $$seleccional['id_historia'] ?></td>
                                                <td><?php echo $$seleccional['Nombre'] ?></td>
                                                <td><?php echo $$seleccional['idm_medico'] ?></td>
                                                <td><?php echo $$seleccional['id_status'] ?></td>
                                                
                                                <td>
                                                    <a type = "button" href = "#"  title ="Editar" class = "btn btn-primary btn-sm btneditar " >Editar</a>

                                                    <a type = "button" href="../modulos/php/eliminarusser.php?id=<?php echo $mostrar['id'] ?>" title ="Eliminar" class = "btn btn-danger btn-sm btneliminar ">Eliminar </a>
                                                </td>
                                            </tr>
                                    </tbody>
                                    <?php
                                        }
                                    ?>
                                </table>
                        
                    </div> 
                </div> 
            </div>
        </div> 
</html>  