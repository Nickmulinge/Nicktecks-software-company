<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="login.css">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- awesome fontfamily -->
	<title>Login Page</title>

</head>

<body>
	 
<body class="main-layout">
     
       
      
	 <!-- <div class="loader_bg">
		<div class="loader"><img src="images/loading.gif" alt="loading" /></div>
	 </div>
	  -->
	 <header>
		<div class="header">
		   <div class="container-fluid">
			  <div class="row d_flex">
				 <div class=" col-md-2 col-sm-3 col logo_section">
					<div class="full">
					   <div class="center-desk">
						  
						 
					   </div>
					</div>
				 </div>
				 <!-- <div class="col-md-8 col-sm-9">
					<nav class="navigation navbar navbar-expand-md navbar-dark ">
					   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
						  <span class="navbar-toggler-icon"></span>
					   </button>
					   <div class="collapse navbar-collapse" id="navbarsExample04">
						  <ul class="navbar-nav mr-auto">
							 <li class="nav-item active">
								<a class="nav-link" href="index.html">Home</a>
							 </li>
							 
							 <li class="nav-item">
								<a class="nav-link" href="we_do.html">What we do</a>
							 </li>
							 <li class="nav-item">
								<a class="nav-link" href="portfolio.html">Portfolio </a>
							 </li>
							 <li class="nav-item">
								<a class="nav-link" href="about.html">About us</a>
							 <li class="nav-item">
								<a href="quote.html" style="text-decoration: none;">
								   <button style="background-color: #7684fd; color: white; padding: 10px 15px; border: none; cursor: pointer;">
									 Get a quote
								   </button> -->
								 <!-- </a>
							 </li>
						  </ul>
					   </div> -->
					</nav>
				 </div>
  <style>
  body {
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background: url() no-repeat;
	background-size: cover;
}

.login-box {
	width: 280px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	color: #191970;
}

.login-box h1 {
	float: left;
	font-size: 40px;
	border-bottom: 4px solid #191970;
	margin-bottom: 50px;
	padding: 13px;
}

.textbox {
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	margin: 8px 0;
	border-bottom: 1px solid #191970;
}

.fa {
	width: px;
	float: left;
	text-align: center;
}

.textbox input {
	border: none;
	outline: none;
	background: none;
	font-size: 18px;
	float: left;
	margin: 0 10px;
}

.button {
	width: 100%;
	padding: 8px;
	color: #ffffff;
	background: none #191970;
	border: none;
	border-radius: 6px;
	font-size: 18px;
	cursor: pointer;
	margin: 12px 0;
}
</style>
	<form action="login.php" method="post">
		<div class="login-box">
			<h1>Login</h1>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Username"
						name="username" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password"
						name="password" value="">
			</div>

			<input class="button" type="submit"
					name="login" value="Login">
		</div>
	</form>
</body>

</html>
