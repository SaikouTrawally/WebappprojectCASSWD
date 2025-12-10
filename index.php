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
    <title>Gym Logger - Home</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            font-size: 18px;
        }

        .container {
            max-width: 700px;
            padding: 20px;
            margin: auto;
        }

        h1 {
            margin-bottom: 10px;
            font-size: 36px;
            font-weight: bold;
        }

        .profile-section {
            display: flex;
            align-items: center;
            gap: 20px;
            margin: 25px 0;
        }

        .profile-info {
            background: #f8f8f8;
            padding: 15px;
            border-radius: 10px;
            font-size: 20px;
        }

        .profile-info .name {
            font-size: 24px;
            font-weight: bold;
        }

        .profile-info .details {
            font-size: 20px;
            margin-top: 5px;
        }

        ul {
            line-height: 1.8;
        }
    </style>
</head>

<body>
<div class="container">

    <!-- MAIN PAGE TITLE -->
    <h1>Welcome to Your Gym Logger</h1>

    <p>This web application allows you to track and store your workouts directly in your MySQL database.</p>

    <!-- PROFILE SECTION UNDER HEADING -->
    <div class="profile-section">
        <img src="images/dumbell.jpg" 
             alt="PT Image"
             style="width:220px; height:auto; border-radius:10px;">

        <div class="profile-info">
            <div class="name">Saikou Trawally — Certified PT</div>
            <div class="details">Strength & Hypertrophy Specialist • 5+ Years Experience</div>
            <a href="https://www.tiktok.com/@st_fit00" target="_blank">TikTok</a>
        </div>
    </div>

    <h2>Features:</h2>
    <ul>
        <li>Add new workouts including type, exercise, sets, reps, and weight.</li>
        <li>Automatically store your workouts in the MySQL database.</li>
        <li>View all logged workouts neatly displayed.</li>
        <li>Simple and clean interface designed for easy use.</li>
    </ul>

</div>
</body>
</html>





