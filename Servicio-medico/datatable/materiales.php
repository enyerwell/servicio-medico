<!DOCTYPE html>
<html lang="es">   
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" href="../images/img.ico">
            <title>Servicio Medico</title>
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
                    <?php  include("conexion.php") 
                    ?>
                    <!-- CREADO POR ENYERWELL CALZADILLA -->  
                    <!-- CREACION DE TABLA --> 
                    <div class=" cuadro1 table-responsive">
                        <div class="container"> 
                            <div class="row">
                                
                                <div class="col-lg-12 ">
                                            <div class="col-lg-12 ">  <br><br><br>         
                                                <center> <button id="btnlistar" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalagregar" aria-hidden="true" ><img src="../images/agregar.png" alt="Agregar"></button>
                                                <a type = "button" href="../modulos/php/pdf/repormaterial.php" title ="Reporte" class = "btn btn-danger btn-sm btnreporte " target="_blank"><img src="../images/pdf.png" alt="pdf"></a> 
                                            </div> 
                                            <table id="materiales" class="table-striped  table-bordered table table-hover text-nowrap table-responsive " style="width:100%">
                                                <thead class="text-center">
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nombre</th>  
                                                    <th>Cantidad</th>
                                                    <th>Registrado por</th>
                                                    <th>Hora y Fecha</th> 
                                                    <th>Accion</th>                             
                                                    <th>Opciones</th> 
                                                    <th>Contador</th>
                                                    <th>Modificar</th>
                                                    
                                                </tr>
                                                <?php    
                                                        include ("conexion.php");
                                                        $query = "SELECT * FROM `material` INNER JOIN tipo_de_material ON material.cod_tmaterial = tipo_de_material.cod_tmaterial";
                                                        $resul = mysqli_query($conexion,$query);
                                                        while ($material= mysqli_fetch_array($resul)){
                                                    ?>
                                                </thead>
                                                            <tr>
                                                            <td><?php echo $material['ID'] ?></td>
                                                            <td><?php echo $material['medicamento'] ?></td>
                                                            <td><?php echo $material['cantidad'] ?></td>
                                                            <td><?php echo $material['registro']; ?></td>
                                                            <td><?php echo $material['horam'] ?></td>
                                                            <td><?php echo $material['accionmat'] ?></td>    
                                                            <td>   
                                                                <a type = "button" href = "#"  title ="Editar" class = "btn btn-primary btn-sm btneditar " > <img src="../images/editar.png" alt="editar"></a>  

                                                                <a type = "button" href="../modulos/php/eliminar.php?id=<?php echo $material['ID'] ?>" title ="Eliminar" class = "btn btn-danger btn-sm btneliminar "> <img src="../images/eliminar.png" alt="Eliminar"> </a> 
                                                                
                                                            </td>
                                                            <td>
                                                                <a type = "button" href = "../modulos/php/pdf/reporind.php?id=<?php echo $material['ID'] ?>"  title ="Editar" class = "btn btn-success btn-sm btnstop " target="_blank" ><?php echo $material['cantidad'] ?></a>
                                                            </td>
                                                            <!-- BOTONES DE INCREMENTAR Y DECREMENTAR -->  
                                                            <td>
                                                            <a type = "button" href = "#"  title ="Incrementar" class = "btn btn-warning btn-sm btnmas " ><b><img src="../images/inc.png" alt="incrementar"> </b></a>

                                                            <a type = "button" href = "#"  title ="Decrementar" class = "btn btn-info btn-sm btnmenos "> <b><img src="../images/dis.png" alt="incrementar"></b></a> 
                                                            </td>

                                                            </tr>
                                                            <?php
                                                    }
                                                ?>
                                                <tbody>
                                                </tbody> 
                                                
                                            </table> 
                                    
                                </div> 
                            </div> 
                        </div>
                    </div>
                    <!-- CREACION DE TABLA --> 

                    <!-- MODAL AGREGAR USUARIOS --> 
                    <div class="  modal fade modal-responsive" id="modalagregar" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" data-bs-backdrop="false"  >
                        <div class="modal-dialog modal-dialig-centered modal-dialog-scrolloable modal-lg "  role="document">
                            <div class="modal-content">
                                    <div class="modal-header">
                                            <div>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                                    <center><h5 class="modal-title" id="ModaleditarLabel"><b>Nuevo Registro</b></h5>
                                            </div> 
                                            <h5 class="modal-title text-center" id="exampleModalLabel"></h5>
                                    </div>
                                        <div class="modal-body">    
                                                            <form  id ="formmaterial" method = "POST" action="../modulos/php/agregar.php" >
                                                                    <input type="hidden" name = "id" >
                                                                    <div class="form-group">
                                                                        <center><label for="#">Nombre Material</label>
                                                                        <select class="form-control" aria-label=".form-select-sm example" name="nombre" id="nombre">
                                                                            <?php 
                                                                                $consulta="SELECT * FROM `tipo_de_material`";
                                                                                $respuesta=mysqli_query($conexion,$consulta);
                                                                                while($row = mysqli_fetch_assoc($respuesta)){ ?>
                                                                                <option value="<?php echo $row['cod_tmaterial']; ?>"> <?php  echo $row['medicamento']; ?></option>
                                                                                <?php 
                                                                                }
                                                                                ?>  
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                    <center><label for="-3">Cantidad</label>
                                                                        <input   type="text" class="form-control" name = "can1" id = "can1" placeholder="cantidad"><br>
                                                                    </div>
                                                                    <div class="form-group">
                                                                       <center><label for="#">Registrado por</label> <br>
                                                                        <input type="text" class="form-control" name="registrado" value="<?php echo $_SESSION['USUARIO']; ?> " readonly>
                                                                    </div>
                                                                    <div class="form-group">
                                                                    <center><label for="#">Accion</label> <br>
                                                                        <input type="text" class="form-control" id = "accionss" name="accions" value="Registrar" readonly>
                                                                    </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" id="Guardar" class="btn btn-primary">Guardar</button>
                                                    </div> 
                                                
                                        </div>   </form>
                            </div> 
                        </div>
                     </div>
                        <!-- MODAL AGREGAR USUARIOS --> 
                       <!-- MODAL  EDITAR --> 
                    
                            <div class="modal fade modal-responsive" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" data-bs-backdrop="false"  >
                                <div class="modal-dialog modal-dialig-centered modal-dialog-scrolloable modal-lg "  role="document">
                                    <div class="modal-content">
                                            <div class="modal-header">
                                                    <div>
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                                        <center><h5 class="modal-title" id="ModaleditarLabel"><b>Editar Material</b></h5>
                                                    </div> 
                                                    <h5 class="modal-title text-center" id="exampleModalLabel"></h5>
                                            
                                                <div class="modal-body"> 
                                                                    <form  id ="formedita" action="../modulos/php/editar.php"  method="POST">
                                                                            <div class="form-group">
                                                                                 <center><label for="#">Id</label>
                                                                                <input type="text" class="form-control" id = "id1" name = "id1" readonly >
                                                                            </div>
                                                                            <div class="form-group">
                                                                            <center><label for="#">Nombre</label>
                                                                            <select class="form-control" aria-label=".form-select-sm example" name="materialedit" id="mat" readonly>
                                                                            <?php 
                                                                                $consulta="SELECT * FROM `tipo_de_material`";
                                                                                $respuesta=mysqli_query($conexion,$consulta);
                                                                                while($row = mysqli_fetch_assoc($respuesta)){ ?>
                                                                                <option value="<?php echo $row['cod_tmaterial']; ?>" readonly> <?php  echo $row['medicamento'];  ?> </option>
                                                                                <?php 
                                                                                }
                                                                                ?>
                                                                        </select><br>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <center><label for="#">Cantidad</label>
                                                                                <input class="form-control"  type="text" name = "cantidadedit" id = "cantidadedit" placeholder="cantidad" required><br>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <center><label for="#">Registrado por</label> <br>
                                                                                <input type="text" class="form-control" id = "regis" name="registrado" value="<?php echo $_SESSION['USUARIO']; ?> " readonly>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <center><label for="#">Accion</label> <br>
                                                                                <input type="text" class="form-control" name="accion" id ="acci" value="Modificar " readonly>
                                                                            </div>
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
                        
                            <!-- MODAL AGREGAR EDITAR -->
                            <!-- CREADO POE ENYERWELL CALZADILLA -->
                                    
                            <!-- MODAL AGREGAR INCREMENTAR Y DISMINUIR --> 
                            <!-- CREADO POR ENYERWELL CALZADILLA --> 
                    <div class="  modal fade modal-responsive" id="Modalinde" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" data-bs-backdrop="false"  >
                        <div class="modal-dialog modal-dialig-centered modal-dialog-scrolloable modal-lg "  role="document">
                            <div class="modal-content">
                                    <div class="modal-header">
                                            <div>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                                <center><h5 class="modal-title" id="ModaleditarLabel"><b>Incrementar Material</b></h5>
                                            </div> 
                                            <h5 class="modal-title text-center" id="exampleModalLabel"></h5>
                                    </div>
                                        <div class="modal-body">   
                                                <form  id ="formmaterial" method = "POST" action="../modulos/php/incrementar.php" >
                                                                    <div class="form-group">
                                                                       <center> <label for="#">Id</label>
                                                                        <input type="text" class="form-control"   id = "idt1" name = "idt1" readonly>
                                                                    </div>
                                                                    <div class="form-group">
                                                                       <center> <label for="#">Material</label>
                                                                        <input   type="text" class="form-control"  name = "mat1" id = "mat1" placeholder="Material" readonly>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <center><label for="#">Cantidad Actual</label>
                                                                        <input type="text" class="form-control" name = "cant1" id = "cant1" placeholder="Cantidad Actual" readonly>
                                                                    </div>
                                                                    <div class="form-group">
                                                                       <center> <label for="#">Cantidad a Incrementar</label>
                                                                        <input type="text" class="form-control" name="incrementa" id="agg" placeholder="Cantidad a Incrementar" >
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <center><label for="#">Registrado por</label> <br>
                                                                                <input type="text" class="form-control" id = "regis" name="registrado" value="<?php echo $_SESSION['USUARIO']; ?> " readonly>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <center><label for="#">Accion</label> <br>
                                                                        <input type="text" class="form-control" name="accion" id ="acci" value="Incrementar " readonly>
                                                                    </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" id="Guardar" class="btn btn-primary">Guardar</button>
                                                    </div>
                                                </form>    
                                        </div>   
                            </div> 
                        </div>
                    </div>

                    <!-- MODAL AGREGAR EDITAR -->
                    <!-- CREADO POE ENYERWELL CALZADILLA -->
                            
                    <!-- MODAL AGREGAR DISMINUIR -->
                    <!-- CREADO POR ENYERWELL CALZADILLA --> 
                    <div class="  modal fade modal-responsive" id="Modaldecre" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" data-bs-backdrop="false"  >
                        <div class="modal-dialog modal-dialig-centered modal-dialog-scrolloable modal-lg "  role="document">
                            <div class="modal-content">
                                    <div class="modal-header">
                                            <div>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                                    <center><h5 class="modal-title" id="ModaleditarLabel"><b>Decrementar Material</b></h5>
                                            </div> 
                                            <h5 class="modal-title text-center" id="exampleModalLabel"></h5>
                                    </div> 
                                        <div class="modal-body">   
                                                            <form  id ="formmaterial" method = "POST" action="../modulos/php/decrementar.php" >
                                                                    <div class="form-group">
                                                                        <center><label for="#">Id</label>
                                                                        <input type="text" class="form-control" id = "idtt17" name = "idtt18" readonly>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <center> <label for="#">Material</label>
                                                                        <input   type="text" class="form-control" name = "mat12" id = "mat10" placeholder="Material" readonly>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <center> <label for="#">Cantidad Actual</label>
                                                                        <input type="text" class="form-control" name = "cante" id = "cant" placeholder="Cantidad" readonly>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <center> <label for="#">Cantidad a Disminuir</label>
                                                                                 <input type="text" class="form-control" name="disminuir" id="agg" placeholder="Cantidad a disminuir" >
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <center><label for="#">Registrado por</label> <br>
                                                                                <input type="text" class="form-control" id = "regis17" name="registrado18" value="<?php echo $_SESSION['USUARIO']; ?> " readonly>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <center><label for="#">Accion</label> <br>
                                                                        <input type="text" class="form-control" name="accion18" id ="acci17" value="Degrementar" readonly>
                                                                    </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" id="Guardar" class="btn btn-primary">Guardar</button>
                                                    </div>
                                                </form>    primary  
                                        </div>   
                            </div> 
                        </div>
                    </div>


                    <!-- MODAL AGREGAR  DISMINUIR -->
                    <!-- CREADO POR ENYERWELL CALZADILLA -->
              <script>
                $('.btneditar').on('click' ,function()
                {
                    $tr=$(this).closest('tr');
                    var datos=$tr.children("td").map(function()
                    {
                        return $(this).text();
                    });
                    $("#modaleditar").modal("show"); 
                    $('#id1').val(datos[0]);
                    $('#materialedit').val(datos[1]);
                    $('#cantidadedit').val(datos[2]);
                });
              </script>

              <!-- SCRIPT DE INCREMENTAR-->
              <script>
                $('.btnmas').on('click' ,function()
                {
                    $tr=$(this).closest('tr');
                    var datos=$tr.children("td").map(function()
                    {
                        return $(this).text();
                    });
                    $("#Modalinde").modal("show"); 
                    $('#idt1').val(datos[0]);
                    $('#mat1').val(datos[2]);
                    $('#cant1').val(datos[2]);
                });
              </script>

              <!-- SCRIPT DE DISMINUIR-->

              <script>
                $('.btnmenos').on('click' ,function()
                {
                    $tr=$(this).closest('tr');
                    var datos=$tr.children("td").map(function()
                    {
                        return $(this).text();
                    });
                    $("#Modaldecre").modal("show"); 
                    $('#idtt17').val(datos[0]);
                    $('#mat10').val(datos[1]);
                    $('#cant').val(datos[2]);
                });
              </script>
            </body>
</html>