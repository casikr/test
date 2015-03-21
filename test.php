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
				<?php 
				
					$connect->mk_connect();
					
					try {
							
					$filename = 'http://www.szmida.nazwa.pl/test/WilliamJames.txt';
					$file = fopen($filename, 'c');
						if($file==false) {
							echo "Failure!";
							exit();
						}
					
					fwrite($file, "MarcinKieruzel");
					
					fclose($file);
					
					$file = fopen($filename, 'r');
						if($file==false) {
							echo "Failure!";
							exit();
						}
					$filesize = 500;
					$filetext = fread($file, $filesize);
					
					echo "<h2>Mówi William James:</h2><p>" . $filetext . "</p>"; 
					 
					
					fclose($file);
					
					} catch (exception $ex){
						
						echo "Error" . $ex->getMessage();
						
					}
					
					echo $_SERVER['SERVER_NAME'];
					echo $_SESSION['$filesize'];
					
					
					
					
				
				?>
			</div>

			<footer>
				<p>
					&copy; Copyright  by Marcin Kieruzel
				</p>
			</footer>
		</div>
	</body>
</html>