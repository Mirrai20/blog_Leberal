<?php

$server = "localhost";
$username = "root";
$password = "17981562";
$database = "comment_system_tutorial";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}

?>
