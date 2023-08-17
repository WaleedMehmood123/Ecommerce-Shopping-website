<?php

// Create connection

$conn = mysqli_connect('localhost','root','','mystore');

// Check connection

if (!$conn) {
    die(mysqli_error($conn));
}


?>