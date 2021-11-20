<?php include('loginconect.php');?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="D:\Mis Documentos\page1-main\Mathematical Space\CSS\estilotabla.css">
    <title>Mathematical Space</title>
</head>
<body>
    <div id="contenedor">
        <div id="central">
            <div id="login">
            <form action="consulta.php" method="POST">
                <div class="titulo">
                    Bienvenido
                </div>
                <form action="save.php" method="POST" id="loginform">
                    <input type="text" name="Usuario" placeholder="Correo" required>

                    <input type="password" placeholder="Contraseña" name="Contraseña" required>

                    <button type="submit" title="Ingresar" name="Ingresar">Ingresar</button>
                </form>

            </div>
        </div>
    </div>

 </body>
</html>

