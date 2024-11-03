<?php
include "db.php";

if (isset($_GET['id'])) {
    // Correct the variable name to $_GET and add a semicolon
    $id = $_GET['id'];

    // Use prepared statements to prevent SQL injection
    $sql = "DELETE FROM contacts WHERE id=?";

    if ($conn->query($sql) === TRUE) {
        echo "Contact successfully deleted.";
    } else {
        echo "Error deleting record." . $sql . "<br>" . $conn->error;
    }
} 

// Redirect to index.php
header("Location: index.php");

?>
