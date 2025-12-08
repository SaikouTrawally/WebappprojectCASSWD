<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

include 'database.php';


$sql = "SELECT * FROM workouts ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Workouts</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background: #f2f2f2;
        }
        .delete-btn {
            background: #d9534f;
            padding: 6px 10px;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }
        .delete-btn:hover {
            background: #b52b27;
        }
    </style>
</head>
<body>

<?php include 'nav.php'; ?>

<h2>Your Workouts</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Type</th>
        <th>Exercise</th>
        <th>Sets</th>
        <th>Reps</th>
        <th>Weight</th>
        <th>Notes</th>
        <th>Date Added</th>
        <th>Actions</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['type'] ?></td>
            <td><?= $row['exercise'] ?></td>
            <td><?= $row['sets'] ?></td>
            <td><?= $row['reps'] ?></td>
            <td><?= $row['weight'] ?></td>
            <td><?= $row['notes'] ?></td>
            <td><?= $row['created_at'] ?></td>
            <td>
                <a class="delete-btn" href="delete.php?id=<?= $row['id'] ?>" 
                   onclick="return confirm('Are you sure you want to delete this workout?');">
                   Delete
                </a>
            </td>
        </tr>
    <?php endwhile; ?>

</table>

</body>
</html>
