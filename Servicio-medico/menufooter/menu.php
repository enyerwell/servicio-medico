<?php
 
    include("../../conexion/seguridad.php");
    include ("conexion.php"); 

 ?>
<nav class="navbar navbar-default navbar-fixed-top before-color">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand alo" href="index.html"><img src="../images/img.ico" alt="Logo de vtv" > </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right scroll-to">
                        <li class="active"><a href="#"><?php  include ("horayfecha.php");?></a></li>
                        <li class="active"><a href="#"><?php echo $_SESSION['USUARIO']; ?></a></li>
                        <li ><a href="../index.php">Inicio</a></li>
                        <?php  if (($_SESSION['id_PERFIL']=="Root")||($_SESSION['id_PERFIL']=="Administrador" )){ ?>
                        <li ><a href="../modulos/Historia_medica.php">Historias</a></li>
                        <?php 
                        if($_SESSION['id_PERFIL'] == "Root"){
                        ?>
                        <li ><a href=" ../modulos/insumos.php">Insumos</a></li>
                        <li ><a href=" ../modulos/materiales.php">Materiales</a></li>
                        <?php }?>
                        <li ><a href=" ../modulos/admin.php">Administrar</a></li>
                        <?php   } ?>
                        <li class="active"><a href="../../conexion/salir.php">Salir</a></li>
                    </ul>
                </div>
            </div> 
</nav> 



  