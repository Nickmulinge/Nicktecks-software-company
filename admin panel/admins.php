<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>NickTechs admins</title>
</head>
<body>
    <div class="adminscontainer my-5">
        <h1 class="h1">List of admins</h1>
       <a class="btn btn-primary"href="/admin panel/create.php" role="button">New admin</a>
    <br>
    <table class= "admintable">
     <thead>
        <tr>
            <th>username</th>
            <th>Admin position</th>
            <th>Email</th>
            <th>Password</th>
            <th> Added at</th>
            <th>Action</th>
        </tr>
     </thead>
     <tbody>
<?php

$servername = "localhost";
$username = "root";  
$password = "";  
$dbname = "nicktechs";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$sql = "SELECT * FROM admins";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Loop through the data and display it
    while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
        <th>$row {username}</th>
        <th>$row{Admin position}</th>
        <th>$row{Email}</th>
        <th>$row{Password}</th>
        <th>$row{Added at}</th>
        <th>$row{Action}</th>
    </tr>
    "
    }
} else {
    echo "No admins found.";
}
?>






?>


     </tbody>
    </table>
</body>
</html>