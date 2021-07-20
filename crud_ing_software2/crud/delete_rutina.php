<?php
    include('../conn.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM control_rutinas WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query failed");
        }
        
        $_SESSION['message'] = 'El ejercicio se borro correctamente';
        header("Location: ../principal.php");
    }
?>