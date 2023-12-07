<?php
// Replace these database credentials with your actual values
$host = 'your_host';
$username = 'your_username';
$password = 'your_password';
$database = 'your_database';

// Create a mysqli connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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

        // Insert user data into your database
        $sql = "INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $fullname, $email, $hashedPassword);
        
        if ($stmt->execute()) {
            // Redirect to a success page or login page after registration
            header("Location: index.html");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<!-- The rest of your HTML code remains unchanged -->
