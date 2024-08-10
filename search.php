<?php
// Connect to your database
$host = "localhost";  
    $user = "root";  
    $password = '';  
   
$dbname = "netflix_database";

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the search query
$query = $_GET['query'];

// Perform a simple search in the database
$sql = "SELECT * FROM movies_or_shows WHERE title LIKE '%$query%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p>Title: " . $row["title"]. "</p><p>Description: " . $row["description"]. "</p><br>";
    }
} else {
    echo "results found";
}
$conn->close();
?>
