<?php
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "website";

    // Create connection
    $con = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
    
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * from login WHERE username = '$username' AND password = '$password' ";
    $result = mysqli_query($con, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        echo "Login Successful";
    } else {
        echo "Login Unsuccessful";
    }
    
    mysqli_close($con);
}
?>
