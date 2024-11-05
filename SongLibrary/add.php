<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $genre = $_POST['genre'];

    $sql = "INSERT INTO songs (title, artist, genre) VALUES ('$title', '$artist', '$genre')";

    if ($conn->query($sql) === TRUE) {
        echo "New song added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Song</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Add a New Song</h2>
    <form action="" method="post">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="artist">Artist:</label>
        <input type="text" id="artist" name="artist" required><br><br>

        <label for="genre">Genre:</label>
        <select id="genre" name="genre" required>
            <option value="Pop">Pop</option>
            <option value="Rock">Rock</option>
            <option value="Hip-Hop">Hip-Hop</option>
            <option value="Jazz">Jazz</option>
            <option value="Classical">Classical</option>
            <option value="Electronic">Electronic</option>
        </select><br><br>

        <input type="submit" value="Add Song">
    </form>
    <br>
    <a href="index.php" class="button">Back to Song Library</a>
</body>
</html>
