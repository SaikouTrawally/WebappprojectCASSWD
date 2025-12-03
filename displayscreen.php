<<<<<<< HEAD
<?php
include("nav.php");
include("database.php");

// FIX: date_logged does not exist, so use created_at instead.
$sql = "SELECT * FROM entries ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
=======
<?php  
include "database.php";

$result = mysqli_query($conn, "SELECT * FROM workouts ORDER BY date_logged DESC");
>>>>>>> 9f674e3df029a11b69f983ebcf2ec301d76ecca2
?>

<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
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

=======
    <title>All Workouts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Workout History</h1>

<table>
    <tr>
        <th>Type</th>
        <th>Exercise</th>
        <th>Sets</th>
        <th>Reps</th>
        <th>Weight</th>
        <th>Date</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['type'] ?></td>
            <td><?= $row['exercise'] ?></td>
            <td><?= $row['sets'] ?></td>
            <td><?= $row['reps'] ?></td>
            <td><?= $row['weight'] ?></td>
            <td><?= $row['date_logged'] ?></td>
        </tr>
    <?php } ?>

</table>

<a href="index.html">Back</a>
<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>

>>>>>>> 9f674e3df029a11b69f983ebcf2ec301d76ecca2
</body>
</html>
