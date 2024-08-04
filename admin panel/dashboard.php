<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0">
	<title>Nicktechs admin section</title>
	
    <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="dashbord.css">
      <!-- responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    /* CSS for the heading */
#head1 {
  text-align: center;
  margin-top: 50px; /* Adjust the margin as needed */
  font-size: 2em;
}

/* CSS for the dashboard section */
.dashboard {
  display: flex;
}

/* CSS for the sidebar */
aside {
  width: 200px; /* Adjust the width as needed */
  background-color: #f0f0f0; /* Change the background color as desired */
  padding: 20px;
}

#sidebar-toggle {
  width: 100%;
  padding: 10px;
  background-color: #333;
  color: #fff;
  border: none;
  cursor: pointer;
}

#sidebar-toggle:hover {
  background-color: #555;
}

nav ul {
  list-style-type: none;
  padding: 0;
}

/* CSS for the links in the sidebar */
nav ul li {
  margin-bottom: 10px;
}

nav ul li a {
  text-decoration: none;
  color: #333;
  font-weight: bold;
}

nav ul li a:hover {
  color: #555;
}

</style>

<body>
    <h1 id="head1"> Welcome Nicktechs Admin</h1>
    <div class="dashboard">
<aside>
    <button id="sidebar-toggle">Dashboard</button>
    <nav>
        <ul style="text-decoration: none;">
            
            <button><li id= "link1"><a href="admin panel/admin.php">Admins management</a></li></button><br>
            <button><li  id= "link1"><a href="feedback.php" >Customer's Feedback</a></li></button><br>
            <button><li  id= "link1"><a href="services.php">Services Section</a></li></button><br>
            <button><li  id= "link1"><a href="Quotes.php">Quotes management</a></li></button><br>
            <button><li  id= "link1"><a href="subscribers.php">Subscribers management</a></li></button><br>
        </ul>
    </nav>
</aside>
    </div>
	
</body>
</html>
