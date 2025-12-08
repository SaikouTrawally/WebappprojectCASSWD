<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}


include 'database.php';

// Handle form submission
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $type = $_POST['type'];
    $exercise = $_POST['exercise'];
    $sets = $_POST['sets'];
    $reps = $_POST['reps'];
    $weight = $_POST['weight'];
    $notes = $_POST['notes'];

    $sql = "INSERT INTO workouts (type, exercise, sets, reps, weight, notes)
            VALUES ('$type', '$exercise', '$sets', '$reps', '$weight', '$notes')";

    if ($conn->query($sql) === TRUE) {
        $message = "Workout added successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Workout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 20px;
        }

        .container {
            width: 400px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
        }

        h2 {
            margin-top: 0;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 12px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background: #0078ff;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            cursor: pointer;
        }

        button:hover {
            background: #005fcc;
        }

        .message {
            padding: 10px;
            margin-bottom: 15px;
            background: #e2ffe2;
            border-left: 5px solid #2da52d;
        }
    </style>
</head>
<body>

<?php include("nav.php"); ?>
<div class="container">
    <h2>Add Workout</h2>

    <?php if ($message != ""): ?>
        <div class="message"><?= $message ?></div>
    <?php endif; ?>

    <form method="POST" action="add.php">

        <label>Type:</label>
        <input type="text" name="type" required>

        <label>Exercise:</label>
        <input type="text" name="exercise" required>

        <label>Sets:</label>
        <input type="number" name="sets">

        <label>Reps:</label>
        <input type="number" name="reps">

        <label>Weight (kg):</label>
        <input type="number" name="weight">

        <label>Notes:</label>
        <textarea name="notes" rows="3"></textarea>

        <button type="submit">Add Workout</button>
    </form>

</div>

</body>
</html>
