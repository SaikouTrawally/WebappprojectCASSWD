<<<<<<< HEAD
<?php include("nav.php"); ?>


=======
>>>>>>> 9f674e3df029a11b69f983ebcf2ec301d76ecca2
<?php
require "db.php";

$error = "";
$title = "";
$author = "";
$category_id = "";

// Fetch categories for dropdown
$catQuery = $conn->query("SELECT * FROM categories");

// Handle submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['title']);
    $author = trim($_POST['author']);
    $category_id = $_POST['category_id'];

    if ($title == "" || $author == "" || $category_id == "") {
        $error = "All fields are required.";
    } else {
        $stmt = $conn->prepare("INSERT INTO books (title, author, category_id) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $title, $author, $category_id);
        $stmt->execute();

        header("Location: index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
    <h2>Add New Book</h2>
    <a href="index.php">Home</a>
</nav>

<div class="container">
    <h1>Add Book</h1>

    <?php if ($error) { ?>
        <p class="error"><?php echo $error; ?></p>
    <?php } ?>

    <form method="POST" class="form-box">
        <label>Title</label>
        <input type="text" name="title" value="<?= htmlspecialchars($title) ?>">

        <label>Author</label>
        <input type="text" name="author" value="<?= htmlspecialchars($author) ?>">

        <label>Category</label>
        <select name="category_id">
            <option value="">-- Select Category --</option>
            
            <?php while ($row = $catQuery->fetch_assoc()): ?>
                <option value="<?= $row['id'] ?>" 
                    <?= $category_id == $row['id'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($row['name']) ?>
                </option>
            <?php endwhile; ?>
        </select>

        <button type="submit">Add Book</button>
    </form>
</div>

</body>
</html>
