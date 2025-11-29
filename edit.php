<?php
include "db.php";

if (!isset($_GET['id'])) {
    echo "No ID provided!";
    exit;
}

$id = $_GET['id'];
$sql = "SELECT * FROM gym_logs WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Entry</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit Workout Entry</h2>

<form action="update.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <label>Exercise:</label>
    <select name="exercise" required>
        <option value="Bench Press" <?php if ($row['exercise']=="Bench Press") echo "selected"; ?>>Bench Press</option>
        <option value="Squat" <?php if ($row['exercise']=="Squat") echo "selected"; ?>>Squat</option>
        <option value="Deadlift" <?php if ($row['exercise']=="Deadlift") echo "selected"; ?>>Deadlift</option>
        <option value="Shoulder Press" <?php if ($row['exercise']=="Shoulder Press") echo "selected"; ?>>Shoulder Press</option>
    </select>

    <label>Weight (kg):</label>
    <input type="number" name="weight" value="<?php echo $row['weight']; ?>" required>

    <label>Reps:</label>
    <input type="number" name="reps" value="<?php echo $row['reps']; ?>" required>

    <button type="submit">Update</button>
</form>

</body>
</html>

