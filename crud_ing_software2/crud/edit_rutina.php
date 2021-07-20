<?php
    include("../conn.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM control_rutinas WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $result_row = mysqli_fetch_array($result);
            $ejercicios = $result_row['ejercicios'];
            $repeticiones = $result_row['repeticiones'];
        }
    }

    if(isset($_POST['editar_rutina'])){
        $id = $_GET['id'];
        $ejercicios = $_POST['ejercicios'];
        $repeticiones = $_POST['repeticiones'];
        $query_edit = "UPDATE control_rutinas SET ejercicios = '$ejercicios', repeticiones = '$repeticiones' WHERE id = $id";
        mysqli_query($conn, $query_edit);

        header("Location: ../principal.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar rutina</title>
    <link rel="stylesheet" href="../css/header-styles.css">
    <link rel="stylesheet" href="../css/styles_edit.css">
</head>
<body>

<header id='cabecera'>
        
<div id='contenedor-header'>
    <div id='logotipo'>
        <a href="../principal.php"><img src="../img/logo.png" alt="Logotipo"></a>
    </div>
    
    <h1><a href="../principal.php">GYM ICO 3</a></h1>
    

    <nav id='menu'>
    <ul>
        <li><a href="../salir.php">Cerrar sesión</a></li>
        <li><a href="../html/rutinas.html">Rutinas</a></li>
        <li><a href="../principal.php">Inicio</a></li>
    </ul>
    </nav>
</div>
</header>

        <div id="form">
            
            <div id="title-form">
                <h3>Edita el ejercicios o el No. de repeticiones</h3>
            </div>
            <form action="edit_rutina.php?id=<?php echo $_GET['id']; ?>" method="POST">

                <input class="form-campos" type="text" name="ejercicios" value="<?php echo $ejercicios; ?>" placeholder="Editarel ejercicio">

                <input class="form-campos" type="text" name="repeticiones" value="<?php echo $repeticiones; ?>" placeholder="Editar las reps">

                <input class="form-campos-btn" type="submit" name="editar_rutina" value="Editar">
            </form>
                <a href="../principal.php">Cancelar</a>
        </div>
    
    
</body>
</html>