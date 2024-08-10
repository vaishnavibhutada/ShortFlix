<?php
include('db_connection.php');

if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Rest of your code for login validation...
} else {
    echo "<h1>Signin Successful</h1>";
}

// Close the connection
mysqli_close($con);
?>
