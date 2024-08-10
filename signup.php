<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeat-password'];

    // Additional validation can be done here if needed

    if ($password !== $repeatPassword) {
        echo "Passwords do not match.";
    } else {
        // Hash the password before storing it in the database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO signup (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $hashedPassword);

        // Execute the statement
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }
        echo "<h1>SignUp Successful</h1>";
        // Close statement
        $stmt->close();
    }
}

// Close connection
$conn->close();
?>
