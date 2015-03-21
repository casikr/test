<?php
    include 'marcin_Class.php';
  
	echo "Strona domowa - testy aplikacji webowych" . "<br>";

	$me = new Marcin();
?>
<!DOCTYPE html>
<html >
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
				
			</header>
			<nav>
				<p>
					<a href="/">Home</a>
				</p>
				<p>
					<a href="/contact">Contact</a>
				</p>
			</nav>

			<h1></h1>
			<h1><?php echo $me->Marcin_connect() ?></h1>
			
			<form id="checkip" name="checkip" method="POST">
				<label for="firstname">Imię</label><br>
				<input type="text" name="firstname" id="firstname" /><br>
				<label for="lastname">Nazwisko</label><br>
				<input type="text" name="lastname" id="lastname" /><br>
				<label for="y_name">Twój e-mail</label><br>
				<input type="text" name="y_name" id="y_name" /><br>
				<label for="p_name">Imię i nazwisko położnej</label><br>
				<input type="text" name="p_name" id="p_name" /><br>
				<label for="d_name">E-mail lub tel. położnej</label><br>
				<input type="text" name="d_name" id="d_name" /><br>
				
				<input type="submit" />
			</form>
			
			<?php 
				$imie = $_POST['firstname'];
				$nazwisko = $_POST['lastname'];
				$ip = getenv('HTTP_CLIENT_IP')?:
				getenv('HTTP_X_FORWARDED_FOR')?:
				getenv('HTTP_X_FORWARDED')?:
				getenv('HTTP_FORWARDED_FOR')?:
				getenv('HTTP_FORWARDED')?:
				getenv('REMOTE_ADDR');
				$your_email = $_POST['y_name'];
				$nun_email = $_POST['d_name'];
				$nun_name = $_POST['p_name'];
				
				
				$me->Marcin_add($imie, $nazwisko, $ip, $your_email, $nun_name, $nun_email);
				
				
			
				
				
			
				
				
			


			?>
		

			<footer>
				<p>
					&copy; Copyright  by Casikr
				</p>
			</footer>
		</div>
	</body>
</html>