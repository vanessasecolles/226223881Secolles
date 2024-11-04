<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $genre = $_POST['genre'];

    if (!empty($title) && !empty($artist) && !empty($genre)) {
        $sql = "INSERT INTO songs (title, artist, genre) VALUES ('$title', '$artist', '$genre')";
        if ($conn->query($sql) === TRUE) {
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Please fill in all fields";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Song</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Add a New Song</h2>
    <form method="post" action="add.php">
        Title: <input type="text" name="title"><br><br>
        Artist: <input type="text" name="artist"><br><br>
        Genre: <input type="text" name="genre"><br><br>
        <input type="submit" value="Add Song">
    </form>
    <a href="index.php">Back to Song Library</a>
</body>
</html>
