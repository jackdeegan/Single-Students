<?php
include 'LoginCheck.php';
checkAdmin();
?>
<html>

<head>
    <title>Search User | Single Students</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
</head>

<body background = "images/Couple.jpg">

<div class="wrapper">
	<!-- This wrapper will contain everything to keep it aligned -->
	<div id = "navbar">
		<ul>
			<li><a href = "AdminPage.php" />Admin <span class = "glyphicon glyphicon-user"></span></a></li>
			<li><a href = "EditUser.php" />Edit User Profiles <span class = "glyphicon glyphicon-pencil"></a></li>
			<li><a href = "BanUnban.php" />Ban/Unban Users <span class = "glyphicon glyphicon-ban-circle"></a></li>
			<li><a href = "SearchUser.php" />Search <span class = "glyphicon glyphicon-search"></a></li>
			<ul style="float:right;list-style-type:none;">
				<li><img src = "images/logo-flat.png" height = "50"/></li>
				<li><a href = "Logout.php" />Logout <span class = "glyphicon glyphicon-log-out"></a></li>
			</ul>
		</ul>
	</div>
</div>

	<!-- jQuery file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>

</html>