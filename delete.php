<<<<<<< HEAD
<?php include("nav.php"); ?>


=======
>>>>>>> 9f674e3df029a11b69f983ebcf2ec301d76ecca2
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
