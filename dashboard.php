<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to Your Dashboard</h1>
        <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
    </header>

    <nav>
        <!-- Add navigation links or menu items for your dashboard here -->
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="logout.php">Logout</a></li> <!-- Include a logout link to log the user out -->
        </ul>
    </nav>

    <main>
        <!-- Add content for your dashboard here -->
        <p>This is the main content of your dashboard.</p>
    </main>

    <footer>
        <!-- Add footer content here if needed -->
        <p>&copy; <?php echo date("Y"); ?> Your Website Name</p>
    </footer>
</body>
</html>
