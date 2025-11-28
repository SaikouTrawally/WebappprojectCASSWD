<?php  
include "database.php";

$result = mysqli_query($conn, "SELECT * FROM workouts ORDER BY date_logged DESC");
?>

<!DOCTYPE html>
<html>
<head>
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

</body>
</html>
