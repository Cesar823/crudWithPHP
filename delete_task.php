<?php

// Conexión a bd
include('db.php');

// Verificación de llegada de datos
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM tasks WHERE id = $id";
    mysqli_query($conn, $query);

    if(!result){
        die("Query Failed");
    }

    // Alerta en el form
    $_SESSION['messaje'] = 'Task removed successfully';
    $_SESSION['messaje_type'] = 'danger';

    // Redireccionamiento
    header("location: index.php");
}

?>