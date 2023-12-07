<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification Failed</title>
    <style>
        /* Basic CSS for your page */
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #3498db; /* Background color */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #message {
            text-align: left; /* Adjust the text alignment as needed */
            background-color: #fff; /* Content background color */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div id="message"></div>
    <script>
        // Simulate a message typing effect
        const message = "OTP Verification Failed";
        const messageContainer = document.getElementById("message");
        let index = 0;

        function typeMessage() {
            if (index < message.length) {
                messageContainer.innerHTML += message.charAt(index);
                index++;
                setTimeout(typeMessage, 50); // Adjust typing speed (in milliseconds)
            }
        }

        // Start typing the message after a delay
        setTimeout(typeMessage, 500); // Adjust the delay (in milliseconds) before typing starts

        // Redirect after the message is fully typed
        setTimeout(function () {
            window.location.href = 'index.html';
        }, message.length * 50 + 1000); // Adjust the delay (in milliseconds) after typing is complete
    </script>
</body>
</html>
