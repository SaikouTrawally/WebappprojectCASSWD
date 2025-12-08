<?php
include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $exercise = $_POST['exercise'];
    $weight = $_POST['weight'];
    $reps = $_POST['reps'];

    // Insert only columns that exist in your DB
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
