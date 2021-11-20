<?php
include("loginconect.php");
$Usuario= '';
$Contraseña='';
$Correo='';
$Numero='';
$Fechanacimiento='';

if (isset($_GET['Usuario'])){

    $Usuario = $_GET['Usuario'];
    $Contraseña = $_GET['Contraseña'];
    $query = "SELECT * FROM usuarios where Usuario='$Usuario' AND Contraseña =''$Contraseña";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result)==1){
        if ($Contraseña==$row['Contraseña']){
            echo 'Usuario valido';
        }

        $row = mysqli_fetch_array($result);
        $Email = $row['Usuario'];
        $Contraseña = $row['Contraseña'];
        $Correo = $row['Correo'];
        $Numero = $row['Numero'];
        $Fechanacimiento = $row['Fechanacimiento'];

    }
}