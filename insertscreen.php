<?php include("nav.php"); ?>

<?php  
include "database.php";

$type = $_POST['type'];
$exercise = $_POST['exercise'];
$sets = $_POST['sets'];
$reps = $_POST['reps'];
$weight = $_POST['weight'];

$sql = "INSERT INTO workouts (type, exercise, sets, reps, weight)
        VALUES ('$type', '$exercise', $sets, $reps, $weight)";

if (mysqli_query($conn, $sql)) {
    echo "Workout added! <br><br>";
    echo "<a href='index.html'>Back</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
