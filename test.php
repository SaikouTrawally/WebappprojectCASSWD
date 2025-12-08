<?php
include "database.php";

$sql = "SELECT * FROM entries";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row['exercise'] . " - " . $row['weight'] . "kg - " . $row['reps'] . "<br>";
}
?>
