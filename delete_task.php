<?php

include('db.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM tasks WHERE id = $id";
    mysqli_query($conn, $query);

    if(!result){
        die("Query Failed");
    }
    $_SESSION['messaje'] = 'Task removed successfully';
    $_SESSION['messaje_type'] = 'danger';
    header("location: index.php");
}

?>