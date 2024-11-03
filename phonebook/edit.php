<?php
include 'db.php';

if (isset($_GET['id'])) {
    // Use prepared statements to prevent SQL injection
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM contacts WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $phone = $row['phone'];
    } else {
        echo "No contact found with that ID.";
        exit;
    }
    $stmt->close();
}

// Update contact if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $id = $_POST['id'];

    if (!empty($name) && !empty($phone)) {
        // Use prepared statement for the update query
        $stmt = $conn->prepare("UPDATE contacts SET name = ?, phone = ? WHERE id = ?");
        $stmt->bind_param("ssi", $name, $phone, $id);

        if ($stmt->execute()) {
            echo "Contact successfully updated.";
            // Redirect to the index page
            header("Location: index.php");
            exit;
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $stmt->close();
    } else {
        echo "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
</head>
<body>
    <h2>Edit Contact</h2>

    <form method="post" action="edit.php">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
        Name: <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"><br><br>
        Phone: <input type="text" name="phone" value="<?php echo htmlspecialchars($phone); ?>"><br><br>
        <input type="submit" value="Update Contact">
    </form>

    <br>
    <a href="index.php">Back to Phonebook</a>
</body>
</html>
