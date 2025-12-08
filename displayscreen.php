<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<?php
include("nav.php");
include("database.php");

// FIX: date_logged does not exist, so use created_at instead.
$sql = "SELECT * FROM entries ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Entries</title>
</head>
<body>

<h1>Workout Entries</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Exercise</th>
        <th>Weight</th>
        <th>Reps</th>
        <th>Date Logged</th>
    </tr>

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['exercise']."</td>";
            echo "<td>".$row['weight']."</td>";
            echo "<td>".$row['reps']."</td>";
            echo "<td>".$row['created_at']."</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No entries found.</td></tr>";
    }
    ?>

</table>

</body>
</html>
