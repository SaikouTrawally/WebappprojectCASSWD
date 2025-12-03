<?php include("nav.php"); ?>


<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM gym_logs WHERE id = $id";
    $conn->query($sql);
}

header("Location: display.php");
exit;
?>
