<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM songs WHERE id='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $title = $row['title'];
        $artist = $row['artist'];
        $genre = $row['genre'];
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $genre = $_POST['genre'];

    if (!empty($title) && !empty($artist) && !empty($genre)) {
        $sql = "UPDATE songs SET title='$title', artist='$artist', genre='$genre' WHERE id='$id'";
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
    <title>Edit Song</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit Song</h2>
    <form method="post" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Title: <input type="text" name="title" value="<?php echo $title; ?>"><br><br>
        Artist: <input type="text" name="artist" value="<?php echo $artist; ?>"><br><br>
        Genre: <input type="text" name="genre" value="<?php echo $genre; ?>"><br><br>
        <input type="submit" value="Update Song">
    </form>
    <a href="index.php">Back to Song Library</a>
</body>
</html>
