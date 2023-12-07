<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // You should implement your OTP verification logic here.
    // In this example, we assume the OTP is hardcoded as '123456' for demonstration purposes.
    
    $email = $_POST['email'];
    $userEnteredOTP = $_POST['otp'];
    $expectedOTP = '123456'; // Replace this with the actual OTP generation logic.
    
    if ($userEnteredOTP === $expectedOTP) {
        // OTP is valid
        echo '<h1>OTP Verified Successfully!</h1>';
        echo '<p>Welcome back, ' . $email . '!</p>';
    } else {
        // Invalid OTP
        echo '<h1>Invalid OTP</h1>';
        echo '<p>Please enter the correct OTP and try again.</p>';
    }
} else {
    // If accessed without POST request, redirect to the OTP page
    header('Location: otp.html');
    exit;
}
?>
