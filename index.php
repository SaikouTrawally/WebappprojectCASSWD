<?php include("nav.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Gym Logger - Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            font-size: 18px; /* ← Increased font size */
        }

        .container {
            max-width: 700px;
            padding: 20px;
        }

        h1 {
            margin-bottom: 10px;
            font-size: 32px; /* Bigger heading */
        }

        ul {
            line-height: 1.8;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to Your Gym Logger</h1>

    <p>This web application allows you to track and store your gym workouts using a MySQL database.</p>

    <h3 style="font-size: 24px;">Features:</h3>
    <ul>
        <li>Add new workouts including type, exercise, sets, reps, and weight</li>
        <li>Automatically store your workouts in the <strong>workouts</strong> table</li>
        <li>View all recorded workouts in a structured table</li>
        <li>Uses PHP, MySQL, and a simple UI with navigation</li>
    </ul>

    <p>
        Use the navigation bar above to get started:<br>
        ➤ <strong>Add Workout</strong> to log a new session<br>
        ➤ <strong>View Workouts</strong> to see all past workouts
    </p>
</div>

</body>
</html>




