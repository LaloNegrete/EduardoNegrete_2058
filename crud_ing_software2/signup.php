<?php
    // Aqui vamos a requerir la conexion de la DB.
    include("conexion.php");

    $message = '';

    if (!empty($_POST['nameuser']) && !empty($_POST['email']) && !empty($_POST['password'])){
        $sql = 'INSERT INTO users (nameuser, email, password) VALUES (:nameuser, :email, :password)';
        
        $statement = $conexion->prepare($sql);

        $statement ->bindParam(':nameuser', $_POST['nameuser']);
        $statement  ->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
        $statement ->bindParam(':password', $password);

        if ($statement->execute()) {
            $message = 'Usuario creado correctamente';
        }else{
            $message = 'Ha ocurrido un error, intentelo de nuevo';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym ICO</title>
    <link rel="stylesheet" href="css/styles-signup.css">
    <link rel="stylesheet" href="css/header-signup.css">
</head>
<body>

    <!-- Inicio de la cabecera -->

    <header id='cabecera'>
        
        <div id='contenedor-header'>
            <div id='logotipo'>
                <a href="index.php"><img src="img/logo.png" alt="Logotipo"></a>
            </div>
            
            <h1><a href="index.php">Gym ICO 3</a></h1>

            <nav id='menu'>
            <ul>
                <li><a href="login.php">Inicia Sesión</a></li>
                <li><a href="index.php">Inicio</a></li>
            </ul>
            </nav>
        </div>
    </header>

    <div id="contenedor-principal">
        <div id="contenedor-formulario">
            <div id="contenido-titulos">
                <h2>BIENVENIDO A GINMASIO ICO</h2>
                <h4>POR FAVOR REGISTRATE</h4>
            </div>

            <?php if (!empty($message)) {   ?>
                <div id="mensaje-signup">
                    <p><?= $message?></p>
                </div>
            <?php  }   ?>
        
            <form action="signup.php" method="post">
                <input class="form-campos-text" type="text" name="nameuser" placeholder="Ingresa tu nombre">

                <input class="form-campos-text" type="text" name="email" placeholder="Ingresa tu correo">

                <input class="form-campos-pass" type="password" name="password" placeholder="Ingresa tu contrasena">

                <input class="form-campos-pass" type="password" name="confirm-password" placeholder="Confirma tu contrasena">

                <input id="boton-enviar" type="submit" value="Enviar">
            </form>
            <p>Ya tienes una cuenta?<a href="login.php"> Login</a></p>
        
        </div>
    </div>
</body>