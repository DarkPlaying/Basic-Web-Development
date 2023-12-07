<?php
// Include your database connection code here
// Example: include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the registration form
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate user input (add more validation as needed)
    if (empty($fullname) || empty($email) || empty($password)) {
        echo "Please fill out all fields.";
    } else {
        // Hash the password for security (you should use password_hash() in production)
        $hashedPassword = md5($password); // Insecure, use password_hash() instead

        // Insert user data into your database (replace with your database logic)
        // Example:
        /*
        $sql = "INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$fullname, $email, $hashedPassword]);
        */

        // Redirect to a success page or login page after registration
        header("Location: index.html");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Create an Account</h1>
        <form action="register.php" method="post">
            <input class="input-field" type="text" name="fullname" placeholder="Full Name" required>
            <input class="input-field" type="email" name="email" placeholder="Email Address" required>
            <input class="input-field" type="password" name="password" placeholder="Password" required>
            <button class="action-button" type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.html">Log in here</a></p>
    </div>
</body>
</html>
