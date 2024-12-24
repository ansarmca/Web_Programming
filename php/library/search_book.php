<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $title = $_GET['title'];

    $sql = "SELECT * FROM books WHERE title LIKE '%$title%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h1>Search Results</h1>";
        echo "<table border='1'><tr><th>Accession Number</th><th>Title</th><th>Authors</th><th>Edition</th><th>Publisher</th></tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['accession_number'] . "</td><td>" . $row['title'] . "</td><td>" . $row['authors'] . "</td><td>" . $row['edition'] . "</td><td>" . $row['publisher'] . "</td></tr>";
        }

        echo "</table>";
    } else {
        echo "No results found for the title '$title'.";
    }
}

$conn->close();
?>
