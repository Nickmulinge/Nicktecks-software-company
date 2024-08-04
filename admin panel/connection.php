<?php
$servername = "localhost";
$username = "root";  // Change this to your database username
$password = "";  // Assuming there's no password for the database
$dbname = "nicktechs";  // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
