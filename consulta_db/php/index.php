<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
</head>
<body>
    <?php
        $x = 1; //variable con un valor numerico
    ?>
    <p>Hola</p>
    <?php
        echo "Hola Mundo".$x;
        echo "<h1>Este es un dato muy importante</h1>";
        if ($x == 10) {
            echo "<p>El numero es igual a 10</p>";
            echo "<p>Tu valor que tienes en la variable xe es: ".$x."</p>";
        }else {
            echo "<p>Es diferente hahaha</p>";
        }
        echo "<a href='consulta.php'>Ir a la pagina consulta</a>";
    ?>

</body>
</html>