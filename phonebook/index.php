<?php 
include 'db.php'; 

$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phonebook</title>
</head>
<body>
    <h2>Phonebook Contacts</h2>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th colspan="2">Action</th> <!-- Two columns for Delete and Edit actions -->
        </tr>

        <?php 
        if ($result->num_rows > 0) {
            // Fetch each row and display the contact information
            while ($row = $result->fetch_assoc()) {
                echo "<tr>"; 
                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
                // Concatenate variables within the href attribute
                echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
                echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a></td>";
                echo "</tr>";
            }
        } else {
            // Display a message if there are no contacts
            echo "<tr><td colspan='4'>No Contacts</td></tr>";
        }
        ?>
    </table>

    <!-- Link to add a new contact -->
    <br>
    <a href="add.php">Add New Contact</a>
</body>
</html>
