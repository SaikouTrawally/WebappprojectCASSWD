<?php include 'nav.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Workout</title>

    <style>
        .form-card {
            max-width: 500px;
            margin: 30px auto;
            padding: 25px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .btn-primary {
            width: 100%;
            padding: 12px;
            background: linear-gradient(to right, #4A77FF, #1162FF);
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
        }

        .btn-primary:hover {
            opacity: 0.9;
        }

        /* Slider styling */
        input[type="range"] {
            width: 100%;
            margin-top: 5px;
        }
    </style>

</head>
<body>

<div class="form-card">
    <h2>Add Workout</h2>

    <form action="insertEntry.php" method="POST">

        <label>Type:</label>
        <input type="text" name="type" required>

        <label>Exercise:</label>
        <input type="text" name="exercise" required>

        <label>Sets:</label>
        <input type="number" name="sets" required>

        <label>Reps:</label>
        <input type="number" name="reps" required>

        <label>Weight (kg):</label>

        <!-- Weight Slider -->
        <input 
            type="range" 
            id="weightSlider" 
            name="weight" 
            min="0" 
            max="200" 
            value="40" 
            step="1"
            oninput="updateWeightValue()"
        >

        <!-- Slider Value -->
        <span id="weightValue">40</span> kg
        <br><br>

        <label>Notes:</label>
        <textarea name="notes"></textarea>

        <button class="btn-primary" type="submit">Add Workout</button>
    </form>
</div>

<script>
function updateWeightValue() {
    document.getElementById('weightValue').innerText =
        document.getElementById('weightSlider').value;
}
</script>

</body>
</html>
