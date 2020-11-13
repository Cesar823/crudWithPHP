<?php

$conn = mysqli_connect('localhost','root','', 'tasks');

if(isset($conn)){
    echo "db is connected"
}

?>