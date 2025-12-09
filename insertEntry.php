<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $type = $_POST['type'];
    $exercise = $_POST['exercise'];
    $sets = $_POST['sets'];
    $reps = $_POST['reps'];
    $weight = $_POST['weight'];
    $notes = $_POST['notes'];

    $sql = "INSERT INTO workouts (type, exercise, sets, reps, weight)
            VALUES ('$type', '$exercise', '$sets', '$reps', '$weight')";

    if ($conn->query($sql) === TRUE) {
        // Redirect WITH success message
        header("Location: displayscreen.php?success=1");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

