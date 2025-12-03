<?php 
include("nav.php"); 
include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $type = $_POST['type'];
    $exercise = $_POST['exercise'];
    $sets = $_POST['sets'];
    $reps = $_POST['reps'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO workouts (type, exercise, sets, reps, weight)
            VALUES ('$type', '$exercise', $sets, $reps, $weight)";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Workout added successfully! 💪</h2>";
    } else {
        echo "<h2>Error: " . $conn->error . "</h2>";
    }
}
?>
