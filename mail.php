<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $to = $_POST["recipient_email"];
    $subject = $_POST["email_subject"];
    $message = $_POST["email_message"];
    $headers = "From: " . $_POST["sender_email"];
    
    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form</title>
</head>
<body>
    <h2>Send an Email</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="recipient_email">Recipient's Email:</label>
        <input type="email" id="recipient_email" name="recipient_email" required><br>
        
        <label for="email_subject">Subject:</label>
        <input type="text" id="email_subject" name="email_subject" required><br>
        
        <label for="email_message">Message:</label><br>
        <textarea id="email_message" name="email_message" rows="4" cols="50" required></textarea><br>
        
        <label for="sender_email">Your Email:</label>
        <input type="email" id="sender_email" name="sender_email" required><br>
        
        <input type="submit" value="Send Email">
    </form>
</body>
</html>
