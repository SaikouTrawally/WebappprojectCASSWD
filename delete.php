<?php
include 'database.php';

$id = $_GET['id'];

$sql = "DELETE FROM workouts WHERE id=$id";
$conn->query($sql);

header("Location: displayscreen.php");
exit();
?>
