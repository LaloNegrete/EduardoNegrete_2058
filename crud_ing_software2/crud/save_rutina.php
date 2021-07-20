<?php

    include('../conn.php');
    
    if (isset($_POST['save_dia'])) {
        $ejercicios = $_POST['ejercicios'];
        $repeticiones = $_POST['repeticiones'];
        
        $query = "INSERT INTO control_rutinas(ejercicios, repeticiones) VALUES ('$ejercicios', '$repeticiones')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query failed");
        }
        
        $_SESSION['mensaje_dia'] = 'Ejercicio guardado correctamente';

        header("Location: ../principal.php");
    }
?>