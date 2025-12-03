<?php
<<<<<<< HEAD
$conn = new mysqli("localhost", "root", "Gym_logger3535", "gym_logger", 3307);
=======
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "bookdb";

$conn = new mysqli($host, $user, $pass, $dbname);
>>>>>>> 9f674e3df029a11b69f983ebcf2ec301d76ecca2

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<<<<<<< HEAD

=======
>>>>>>> 9f674e3df029a11b69f983ebcf2ec301d76ecca2
