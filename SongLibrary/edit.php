<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM songs WHERE id=$id";
    $result = $conn->query($sql);
    $song = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $genre = $_POST['genre'];

    $sql = "UPDATE songs SET title='$title', artist='$artist', genre='$genre' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Song</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit Song</h2>
    
    <form method="POST" class="form-container">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?php echo $song['title']; ?>" class="form-input" required>

        <label for="artist">Artist:</label>
        <input type="text" name="artist" id="artist" value="<?php echo $song['artist']; ?>" class="form-input" required>

        <label for="genre">Genre:</label>
        <select name="genre" id="genre" class="form-select" required>
            <option value="Pop" <?php if($song['genre'] == 'Pop') echo 'selected'; ?>>Pop</option>
            <option value="Rock" <?php if($song['genre'] == 'Rock') echo 'selected'; ?>>Rock</option>
            <option value="Jazz" <?php if($song['genre'] == 'Jazz') echo 'selected'; ?>>Jazz</option>
            <option value="Hip-Hop" <?php if($song['genre'] == 'Hip-Hop') echo 'selected'; ?>>Hip-Hop</option>
            <option value="Classical" <?php if($song['genre'] == 'Classical') echo 'selected'; ?>>Classical</option>
        </select>

        <button type="submit" name="update" class="button">Update Song</button>
    </form>

    <br>
    <a href="index.php" class="button">Back to Song Library</a>
</body>
</html>
