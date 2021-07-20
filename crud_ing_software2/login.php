<?php
    
    session_start();

    if (isset($_SESSION['id'])) {
        header('Location: principal.php');
    }

    require 'conexion.php';
    
    
    if (!empty($_POST['email']) && !empty($_POST['password'])){
        $records = $conexion->prepare('SELECT id, email, password FROM users WHERE email=:email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
            $_SESSION['id'] = $results['id'];
            header('Location: principal.php');
        }else{
            $message = 'El email o la contraseña son incorrectos';
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
                <li><a href="signup.php">Regístrate</a></li>
                <li><a href="index.php">Inicio</a></li>
            </ul>
            </nav>
        </div>
    </header>

    <div id="contenedor-principal">
        <div id="contenedor-formulario">
            <div id="contenido-titulos">
                <h2>BIENVENIDO A GINMASIO ICO</h2>
                <h4>POR FAVOR LOGUEATE</h4>
            </div>
            
            <?php if (!empty($message)) {   ?>
                <div>
                    <p><?= $message ?></p>
                </div>
            <?php  }   ?>

            <form action="login.php" method="post">
                <input class="form-campos-text" type="text" name="email" placeholder="Ingresa tu correo">

                <input class="form-campos-pass" type="password" name="password" placeholder="Ingresa tu contrasena">

                <input id="boton-enviar" type="submit" value="Enviar">
            </form>
        
        </div>
    </div>
</body>