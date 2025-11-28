<?php
include "db.php";

if (!isset($_GET['id'])) {
    echo "No ID provided!";
    exit;
}

$id = $_GET['id'];

$sql = "SELECT * FROM gym_logs WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "Record not found.";
    exit;
}

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Entry</title>
</head>
<body>

<h2>Edit Workout Entry</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <label>Exercise:</label>
    <input type="text" name="exercise" value="<?php echo $row['exercise']; ?>" required><br><br>

    <label>Weight (kg):</label>
    <input type="number" name="weight" value="<?php echo $row['weight']; ?>" required><br><br>

    <label>Reps:</label>
    <input type="number" name="reps" value="<?php echo $row['reps']; ?>" required><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
