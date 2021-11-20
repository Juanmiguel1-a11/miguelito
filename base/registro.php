<?php include("loginconect.php");?>
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
<form action="savelogin.php" method="POST"  >
    <div id="contenedor">
        <div id="central">
            <div id="login">
                <div class="titulo">
                    Registro
                </div>
                <form id="loginform" action= "save.php" method = "POST">

                    <input type="text" name="Usuario" placeholder="Usuario" required>

                    <input type="password" placeholder="Contraseña" name="Contraseña" required>

                    <input type="email" name="Correo" placeholder="Correo" required>

                    <input type="tel" name="Numero" placeholder="Número" required>

                    <input type="date" name="Fechanacimiento" required>

                    <button type="submit" title="Ingresar" name="Ingresar">Registrar</button>
                </form>

            </div>
        </div>
    </div>
</form>
 </body>

</body>
</html> 