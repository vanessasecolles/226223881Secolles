<?php 
include 'db.php'; 

$sql = "SELECT * FROM songs";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song Library</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Song Library</h2>
    <a href="add.php" class="button">Add New Song</a>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Artist</th>
            <th>Genre</th>
            <th>Action</th>
        </tr>

        <?php 
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>"; 
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['artist'] . "</td>";
                echo "<td>" . $row['genre'] . "</td>";
                echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No Songs Found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
