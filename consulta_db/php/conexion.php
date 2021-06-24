<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion</title>
</head>
<body>
    
</body>
</html>
<?php
    $db_name= "alumnos_ICO";
    $user_db= "root";
    $password_db= "";
    $host_db= "127.0.0.1";
    $conexion = mysqli_connect($host_db,$user_db,$password_db);
    if ($conexion) {
        echo "<p align='center' style='color: blue'>MySQL le da permisos a PHp para que pueda ejecutar consultas</p>";
    }else{
        echo "<p align='center' style='color:red'>Tienes un error debido a esto no puedes hacer consultas</p>";
    }
?>