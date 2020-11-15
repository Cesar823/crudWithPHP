<?php

// conexión a db
include("db.php");

/* verificación si llegaron los datos */
if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    //echo $title;
    //echo $description;

    // consulta
    $query = "INSERT INTO tasks(title, description) VALUES('$title', '$description')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed");
    }
    $_SESSION['messaje'] = 'task saved succesfully';
    $_SESSION['messaje_type'] = 'success';
    //echo "saved";
    
    // redireccionamiento
    header("location: index.php");
}

?>