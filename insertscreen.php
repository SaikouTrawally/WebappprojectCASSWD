<?php 
include("nav.php"); 
include("database.php");

$type = $_POST['type'];
$exercise = $_POST['exercise'];
$sets = $_POST['sets'];
$reps = $_POST['reps'];
$weight = $_POST['weight'];

$sql = "INSERT INTO workouts (type, exercise, sets, reps, weight)
        VALUES ('$type', '$exercise', $sets, $reps, $weight)";

if ($conn->query($sql) === TRUE) {
    echo "Entry added successfully!";
} else {
    echo "Error: " . $conn->error;
}
?>

