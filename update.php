<?php include("nav.php"); ?>


<?php
include "database.php";

$id = $_POST['id'];
$exercise = $_POST['exercise'];
$weight = $_POST['weight'];
$reps = $_POST['reps'];

$sql = "UPDATE gym_logs 
        SET exercise='$exercise', weight='$weight', reps='$reps'
        WHERE id=$id";

if ($conn->query($sql)) {
    header("Location: display.php");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
?>
