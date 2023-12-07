<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        /* Basic CSS for your form */
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        /* Style for the form container */
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }
        
        /* Style for form inputs and button */
        input[type=number] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
        }

        /* Responsive styles */
        @media screen and (max-width: 600px) {
            .container {
                max-width: 100%;
                margin: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>OTP Verification</h2>
        <?php
        // Your PHP code for sending OTP
        
        if (@mail($to, $subject, $message, $header)) {
            // Display a JavaScript alert for successful OTP verification
            echo "<script>alert('OTP Verification Successful'); window.location.href = 'index.html';</script>";
        } else {
            echo "Failed to send OTP. Check your email configuration.";
        }
        ?>
        <form action="submitotp.php" method="post" onsubmit="return verifyOTP()">
            Enter OTP
            <input type="hidden" name="otp" value="<?php echo $otp; ?>"><br>
            <p>  </p>
            <button type="submit">Return to Login Page</button>
        </form>
    </div>
</body>
</html>
