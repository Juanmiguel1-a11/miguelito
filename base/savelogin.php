<?php
include('loginconect.php');
if (isset($_POST['Ingresar'])) {
    $Usuario = $_POST['Usuario'];
    $Contraseña = $_POST['Contraseña'];
    $Correo = $_POST['Correo'];
    $Numero = $_POST['Numero'];
    $Fechanacimiento = $_POST['Fechanacimiento'];
    $query = "INSERT INTO usuarios VALUES('$Usuario', '$Contraseña', '$Correo', '$Numero', '$Fechanacimiento')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("Query Failed.");
    }

    header('location: login.php');

}
?> 