<?php
session_start();
require('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Protect against SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Successful login
        $_SESSION['username'] = $username;
        header("location: dashboard.php");  // Redirect to welcome page or wherever you want
    } else {
        // Invalid credentials
        echo "Invalid username or password.";
    }
}

$conn->close();
?>
