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

