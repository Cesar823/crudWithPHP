<?php

session_start();

// Conection with mysql
$conn = mysqli_connect('localhost', 'root', '', 'notes');

/* 
// Connection verification
if(isset($conn)){
    echo "db is connected";
}
*/

?>