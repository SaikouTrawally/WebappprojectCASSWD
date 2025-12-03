<?php
$conn = new mysqli("localhost", "root", "Gym_logger3535", "gym_logger", 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


