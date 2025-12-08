<?php
include 'database.php';

$id = $_POST['id'];
$type = $_POST['type'];
$exercise = $_POST['exercise'];
$sets = $_POST['sets'];
$reps = $_POST['reps'];
$weight = $_POST['weight'];
$notes = $_POST['notes'];

$sql = "UPDATE workouts 
        SET type='$type', exercise='$exercise', sets='$sets',
            reps='$reps', weight='$weight', notes='$notes'
        WHERE id=$id";

$conn->query($sql);

header("Location: displayscreen.php");
exit();
?>
