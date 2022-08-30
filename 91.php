<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="shortcut icon" href="img/img.ico">
       <link rel="stylesheet" href= "css/login.css">
        <title>Servicio Medico</title>
    </head>
    <body>
           
            <form action="conexion/validacion.php" method="POST" class="formulario rounded px-5">
                <div class="text-center mb-4">
                    <br><img class="mb-4"src="img/logo-menu.png" alt="logo vtv" >
                    <h1 class="titulo mb-3 font-weight-bold">Servicio Medico</h1>
                </div>
                <div class="formulario-label">
                    <input type="text" id="usuario"class="form-control" placeholder="Ingrese su Usuario" required autofocus>
                </div>
                <div class="formulario-label">
                    <input type="password" id="password" class="form-control" placeholder="Ingrese su Contraseña" required autofocus>
                </div>
                <div>
                   <center><button class="btn btn-primary btn btn-outline-dark">Ingresar</button>
                </div>
</form>
        <script src=" bootstrap/js/jquery.js"></script>
        <script src=" bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src=" bootstrap/js/bootstrap.js"></script>
    </body>
</html>
