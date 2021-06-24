<?php
    include("conexion.php");
    mysqli_set_charset($conexion, 'utf8');
    $conexion = new mysqli('127.0.0.1','root','','alumnos_ICO');
    
    // Consulta en sql: 
    $consulta_sql = "SELECT * FROM alumnos";
    
    // Vamos a mandar la consulta:
    $resultado = $conexion-> query($consulta_sql);

    $count = mysqli_num_rows($resultado);

    // Creacion de unas columnas con ayuda de HTML:
    
    echo "<table border='2px'>";
    echo "<tr>";
    echo "<th>Nombre de alumno</th>";
    echo "<th>Cerrera</th>";
    echo "<th>No. de cuenta</th>";
    echo "<th>Direccion</th>";
    echo "<th>Telefono</th>";
    echo "<th>Email</th>";
    echo "<th>Password</th>";
    echo "<th>Fecha Registro</th>";
    echo "</tr>";

    if ($count>0) {
        while($row = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td>".$row['nombre_alumno']."</td>";
            echo "<td>".$row['carrera']."</td>";
            echo "<td>".$row['numerocuenta']."</td>";
            echo "<td>".$row['direcion']."</td>";
            echo "<td>".$row['telefono']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td>".$row['FechaRegistro']."</td>";
            echo "</tr>";
        }
    }else{
        echo "<h2>Sin datos en la DB.</h2>";
    }
    echo "<a href='index.php'>Ir a la pagina de inicio</a>";
?>
