<?php
	include "config.php";
	include "classCaller.php";
	$users->connect();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Worcap</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="img/logo.png">
	<script src="jquery/jquery.js"></script>
	<script src="jquery/jquerycode.js"></script>
	<script type="text/javascript" src="js/javascript.js"></script>
</head>
<body>

	<div class="container">
	
		<div class="nav"> <!-- ***** Navigation ***** -->
		
			<div class="left-nav"> <!-- Logo and Title in the left corner -->
				<img src="img/logo.png"/>
				<h1>Welcome to Worcap</h1>
			</div> <!-- Closing for left-nav in the left corner -->

			<div class="right-nav"> <!-- The links in the right corner -->
				<button id="lr_wrapper">☰</button>
				<div class="nav-link"><button id="login" class="lr hideb">Login</button></div>
				<div class="nav-link"><button id="register" class="lr hideb">Register</button></div>
			</div> <!-- Closing tag for right-nav -->
		
		</div> <!-- ***** Closing of navigation tag ***** -->
		
		<div class="body">

		</div>
	</div> <!-- Closing tag for container -->
	<div class="background-black">
	</div>
	<div class="login-form">
		<div class="login-holder">
			<h2>Login Here</h2>
			<form action="login_process.php" method="POST">
				<div class="form-separator"><label>Username: </label><input type="text" name="uname"/></div>
				<div class="form-separator"><label>Password: </label><input type="password" name="pass"/></div>
				<input type="submit" value="Login" name="login" class="btn btn-success"/><input type="button" class="btn btn-danger" value="Cancel">
			</form>
		</div>
	</div>

</body>
</html>