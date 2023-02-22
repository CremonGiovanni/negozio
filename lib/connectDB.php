<?php
function connectDB($hostname, $username, $password, $DBname){
    $conn  = mysqli_connect($hostname, $username, $password, $DBname);
    return $conn;
}
?>