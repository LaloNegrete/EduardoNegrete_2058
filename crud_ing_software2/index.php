<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM ICO</title>
    <link rel="stylesheet" href="css/header-styles.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!-- Inicio de la cabecera -->

    <header id='cabecera'>
        
        <div id='contenedor-header'>
            <div id='logotipo'>
                <a href="index.php"><img src="img/logo.png" alt="Logotipo"></a>
            </div>
            
            <h1><a href="index.php">GYM ICO 3</a></h1>
            

            <nav id='menu'>
            <ul>
                <li><a href="login.php">Inicia Sesión</a></li>
                <li><a href="index.php">Inicio</a></li>
            </ul>
            </nav>
        </div>
    </header>

    <?php if (!empty($message)) { ?>
        <div>
            <p><?= $message ?></p>
        </div>
    <?php } ?> 

    <div id="contenedor-onepart">
        <div id="primera-parte">
            <h2>BIENVENIDO A GINMASIO ICO</h2>
            <h4>LOS MEJORES GIMNASIOS EN LA CDMX</h4>
            <button><a href="signup.php">Registrate</a></button>
        </div>
    </div>

    <!-- Fin de la cabecera -->
    
    <!-- Inicio de los planes -->

    <div id="contenedor-principal-planes">
        
        <div id="contenedor-titulos">
            <h2>ELIGE <span>TU PLAN</span></h2>
            <p>Entrena con nosotros eligiendo un pllan. Todos incluyen las áreas de cardio, peso integrado, peso libre, funcional, vestidores y más...</p>
        </div>
        
        
        <!-- Plan Black -------------------- -->
        <div id="contenedor-planes">
                <div id="plan-black">
                    <div class="title fondo-negro">
                        <span class="plan">PLAN</span>
                        <h2 class="tipo-plan green">BLACK</h2>
                    </div>
                    <div class="contenedor-precios">
                        <div class="precio fondo-green">
                            <span>DESDE</span>
                            <p class="negro">$ 499.00</p>
                        </div>
                    </div>
                <div class="contenido-planes">
                    <p class="entrena">Entrena en cualquiera de nuestras unidaddes en la CDMX</p>
                    <span>Beneficios</span>
                    <ul>
                        <li>Area de peso libre y peso integrafo</li>
                        <li>Sillones de masaje</li>
                        <li>Acceso ilimitado</li>
                        <li>Acceso a otras unidades de la cadena</li>
                        <li>Playera exclusiva</li>
                        <li>Invitar a un amigo</li>
                        <li>Cabina de colágeno</li>
                    </ul>
                    
                    <div class="contenedor-boton">
                        <button><a href="signup.php">Inscribete ahora</a></button>
                    </div>
                </div>
            </div>
            
            <!-- Plan smart  ------------------------->
            <div id="plan-smart">
                <div class="title fondo-green">
                    <span class="plan">PLAN</span>
                    <h2 class="tipo-plan negro">SMART</h2>
                </div>
                    <div class="contenedor-precios">
                        <div class="precio fondo-negro">
                            <span>DESDE</span>
                            <p class="green">$ 299.00</p>
                        </div>
                    </div>
                <div class="contenido-planes">
                    <p class="entrena">Entrena cuando quieras en una sola unidad</p>
                    <span>Beneficios</span>
                    <ul>
                        <li>Area de peso libre y peso integrafo</li>
                        <li>Acceso ilimitado</li>
                        <li>Sin cargo de cancelacion</li>
                    </ul>
                    
                    <div class="contenedor-boton">
                        <button class="boton2"><a href="signup.php">Inscribete ahora</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <footer>
    <p>&copy; Desarrollado por Lalo Web</p>
    <p>Todos los derechos reservados<p>
    </footer>

    
    <!-- Fin de los planes -->
</body>
</html>