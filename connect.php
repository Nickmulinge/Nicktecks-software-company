<?php
 // getting all values from the HTML form
 if(isset($_POST['submit']))
 {
     $full_name = $_POST['full_name'];
     $email = $_POST['email'];
     $service = $_POST['service'];
     $description =  $_POST['description'];
 }

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nicktechs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO quotes (full_name, email, service, description) 
        VALUES ('$fullName', '$email', '$service', '$description')";


if ($conn->query($sql) === TRUE) {
  echo "Quote send successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>