<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include("nav.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Workout</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form-container { max-width: 500px; }
        label { font-weight: bold; }
        input { width: 100%; padding: 8px; margin-bottom: 12px; }
        button { padding: 10px 15px; cursor: pointer; }
    </style>
</head>
<body>

<div class="form-container">
    <h1>Add New Workout</h1>

    <form method="POST" action="insertEntry.php">
        <label>Type:</label>
        <input type="text" name="type" required>

        <label>Exercise:</label>
        <input type="text" name="exercise" required>

        <label>Sets:</label>
        <input type="number" name="sets" required>

        <label>Reps:</label>
        <input type="number" name="reps" required>

        <label>Weight (kg):</label>
        <input type="number" name="weight" required>

        <button type="submit">Add Workout</button>
    </form>
</div>

</body>
</html>
