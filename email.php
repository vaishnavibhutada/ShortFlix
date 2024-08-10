<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the email address from the form
    $email = $_POST["email"];

    // Validate the email address (you can add more validation if needed)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email format";
    } else {
        // If the email is valid, you can proceed with further actions like saving to a database, sending confirmation emails, etc.
        // Here, we'll just display a success message
        $success_message = "Thank you for signing up!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShortFlix India - Sign Up</title>
    <!-- Your CSS and other meta tags -->
</head>
<body>

    <!-- Your HTML content -->

    <?php if (isset($error_message)) : ?>
        <div><?php echo $error_message; ?></div>
    <?php endif; ?>

    <?php if (isset($success_message)) : ?>
        <div><?php echo $success_message; ?></div>
    <?php endif; ?>

    <!-- Your HTML content -->

</body>
</html>
