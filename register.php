<?php
    include 'MK_class.php';
    echo "Marcin Kieruzel" . "<br>";
	echo "Strona domowa - testy aplikacji webowych" . "<br>";

	$connect = new MK();
?>
<!DOCTYPE html>
<html lang="pl_PL">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>TEST</title>
		<meta name="description" content="">
		<meta name="author" content="Marcin Kieruzel">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<script src="script.js"></script>
	</head>

	<body>
		<div>
			<header>
				<h1>index</h1>
			</header>
			<nav>
				<p>
					<a href="/">Home</a>
				</p>
				<p>
					<a href="/contact">Contact</a>
				</p>
			</nav>

			<div>
				<form method="post" action="register-exe.php">
					<label for="login">LOGIN:</label>
					<input type="text" name="login" id="login" onchange="check_login();"><br>
					<div id="response"></div>
					<label for="password">HASŁO:</label>
					<input type="password" name="password" id="password"><br>
					<input type="submit" value="ZAREJESTRUJ">
					<div id="response"></div>
				</form>
				
			</div>

			<footer>
				<p>
					&copy; Copyright  by Marcin Kieruzel
				</p>
			</footer>
		</div>
	</body>
</html>