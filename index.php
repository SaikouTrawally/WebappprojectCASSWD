<<<<<<< HEAD
<a href="index.php">Home</a>
<a href="displayscreen.php">Workouts</a>
<a href="editscreen.php">Add Workout</a>

<?php
include("database.php");

// Users table
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "<h2>Users</h2>";
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No users found.";
}

// Workouts table
$sql = "SELECT w.id, u.name, w.workout_date, w.workout_type, w.duration_minutes, w.calories_burned
        FROM workouts w
        JOIN users u ON w.user_id = u.id";
$result = $conn->query($sql);

echo "<h2>Workouts</h2>";
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>User</th><th>Date</th><th>Workout Type</th><th>Duration (mins)</th><th>Calories Burned</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['workout_date']}</td>";
        echo "<td>{$row['workout_type']}</td>";
        echo "<td>{$row['duration_minutes']}</td>";
        echo "<td>{$row['calories_burned']}</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No workouts found.";
}

$conn->close();
?>
=======
<?php include "db.php"; ?>

<select name="exercise">
    <?php
    $sql = "SELECT * FROM exercises";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()):
    ?>
        <option value="<?php echo $row['name']; ?>">
            <?php echo $row['name']; ?>
        </option>
    <?php endwhile; ?>
</select>
>>>>>>> 9f674e3df029a11b69f983ebcf2ec301d76ecca2

