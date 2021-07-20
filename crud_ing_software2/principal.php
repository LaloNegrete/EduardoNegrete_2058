<?php    
    
    require 'conexion.php';
    

// Comprobamos si el id que stá almacenando esta sesión, existe en la base de datos
if (isset($_SESSION['id'])) {
    $records = $conexion-> prepare('SELECT id, nameuser, email, password FROM users WHERE id =:id');
    $records-> bindParam(':id', $_SESSION['id']);
    $records-> execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="css/header-styles.css">
    <link rel="stylesheet" href="css/styles_principal.css">
</head>
<body>
    
    <!-- Inicio de la cabecera -->

    <header id='cabecera'>
        
        <div id='contenedor-header'>
            <div id='logotipo'>
                <a href="principal.php"><img src="img/logo.png" alt="Logotipo"></a>
            </div>
            
            <h1><a href="principal.php">GYM ICO 3</a></h1>
            

            <nav id='menu'>
            <ul>
                <li><a href="salir.php">Cerrar sesión</a></li>
                <li><a href="html/rutinas.html">Rutinas</a></li>
                <li><a href="principal.php">Inicio</a></li>
            </ul>
            </nav>
        </div>
    </header>

    <?php if (!empty($user)) { ?>
        <div id="saludo-bienvenida">
            <h2>Bienvenido <?= $user['nameuser'] ?><span>, iniciaste sesión satisfactoriamente.</span></h2>
        </div>
    <?php }else{ ?>
        <h2>Por favor registrate o inicia sesión</h2>
        <a href="login.php">Inicia sesión.</a>
        <a href="signup.php">Regístrate</a>
        <?php } ?>

        <div id="contenedor-form">
            <div id="contenedor-interno-form">
                <div id="title-form">
                    <h2>Por favor, ingresa los datos: </h2>
                </div>
                <form action="crud/save_rutina.php" method="POST">
                    <input type="text" name="ejercicios" placeholder="Ejercicio">
                    <input type="text" name="repeticiones" placeholder="No. de repeticiones">
                    <input type="submit" name="save_dia" value="Guardar">
                </form>
            </div>
        </div>
        <div id="contenedor-tabla">
            <table>
                <thead>
                    <tr>
                        <th>EJERCICIOS</th>
                        <th>REPETICIONES</th>
                        <th>FECHA DE CREACIÓN</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include('conn.php');
                        $query = "SELECT * FROM control_rutinas";
                        $result_rutina = mysqli_query($conn, $query);
                        while ($row_rutina =  mysqli_fetch_array($result_rutina)) { ?>
                        <tr>
                            <td><?php echo $row_rutina['ejercicios'] ?></td>
                            <td><?php echo $row_rutina['repeticiones'] ?></td>
                            <td><?php echo $row_rutina['created'] ?></td>
                            <td>
                                <a class="enlaces-acciones" href="crud/edit_rutina.php?id=<?php echo $row_rutina['id']?>">
                                    Editar
                                </a>
                                <a class="enlaces-acciones" href="crud/delete_rutina.php?id=<?php echo $row_rutina['id']?>">
                                    Borrar
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>        
</body>
</html>