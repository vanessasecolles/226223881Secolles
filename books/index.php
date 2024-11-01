<?php
$servername = "localhost";
$username = "root";
$password = ""; // i didnt put any password
$dbname = "search_db";
;

// this is the connection between the phpmyadmin and the database.sql
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection status
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if search query exists and removing the list in empty search bar
if (isset($_GET['search']) && !empty(trim($_GET['search']))) {
    $searchQuery = $conn->real_escape_string(trim($_GET['search']));

    // SQL to search for books by title connected to the phpMyAdmin server
    $sql = "SELECT * FROM books WHERE title LIKE '%$searchQuery%'";
    $result = $conn->query($sql);

    // Results
    if ($result->num_rows > 0) {
        echo "<h2>Search Results:</h2><ul>";
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<li><strong>" . $row["title"] . "</strong> by " . $row["author"] . " (" . $row["year_published"] . ")</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No results found for <b>'$searchQuery'</b>.</p>";
    }
} else {
    echo "<h1>Welcome to Book Wizard</h1>";
    echo "<p>What Book Do You Like?</p>";
}

$conn->close();
?>

<form method="get" action="">
    <input type="text" name="search" placeholder="Enter book title">
    <input type="submit" value="Search">
</form>