<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $exercise = $_POST['exercise'];
    $reps = $_POST['reps'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO entries (exercise, weight, reps)
            VALUES ('$exercise', '$weight', '$reps')";

    if ($conn->query($sql) === TRUE) {
        header("Location: displayscreen.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

