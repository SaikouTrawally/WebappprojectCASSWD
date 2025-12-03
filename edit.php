<<<<<<< HEAD
<?php include("nav.php"); ?>


<?php
require "database.php";
=======
<?php
require "db.php";
>>>>>>> 9f674e3df029a11b69f983ebcf2ec301d76ecca2

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = $_GET['id'];

// Get book data
$stmt = $conn->prepare("SELECT * FROM books WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$book = $stmt->get_result()->fetch_assoc();

if (!$book) {
    header("Location: index.php");
    exit;
}

$title = $book['title'];
$author = $book['author'];
$category_id = $book['category_id'];

// Fetch categories
$catQuery = $conn->query("SELECT * FROM categories");

$error = "";

// Handle update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['title']);
    $author = trim($_POST['author']);
    $category_id = $_POST['category_id'];

    if ($title == "" || $author == "" || $category_id == "") {
        $error = "All fields are required.";
    } else {
        $stmt = $conn->prepare("UPDATE books SET title=?, author=?, category_id=? WHERE id=?");
        $stmt->bind_param("ssii", $title, $author, $category_id, $id);
        $stmt->execute();

        header("Location: index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
    <h2>Edit Book</h2>
    <a href="index.php">Home</a>
</nav>

<div class="container">
    <h1>Edit Book</h1>

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
                    <?= $category_id == $row['id'] ? "selected" : "" ?>>
                    <?= htmlspecialchars($row['name']) ?>
                </option>
            <?php endwhile; ?>

        </select>

        <button type="submit">Save Changes</button>
    </form>
</div>

</body>
</html>


