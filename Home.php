<?php
include 'LoginCheck.php';
forHomeAndRegister();
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Home | Single Students</title>	
	</head>
	<body background = "images/Couple.jpg" >
	<form action ="Login.php" method="POST">
		<center><img src = "images/Logo.png" >
		<br>
		<input type = "text" class="inputs" placeholder = "username" name = "username" autofocus/>
		<br>
		<input type = "password" class="inputs" placeholder = "password" name = "password"/>
		<br>
		<button onclick="location.href = 'Login.php';" type = "submit" name = "submit">Login</button>
		<button onclick="location.href = 'Register.php';" type = "button">Register</button></center>
	</form>
	</body>
</html>