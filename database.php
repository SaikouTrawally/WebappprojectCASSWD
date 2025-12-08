<?php
$servername = "localhost";
$username = "root";
$password = "Gym_logger3535"; 
$database = "gym_logger";
$port = 3307;

$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
