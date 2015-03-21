<?php 

	class Marcin {
		private $user = 'szmida_16';
		private $dbname = 'szmida_16';
		private $host = 'szmida.nazwa.pl';
		private $pass = 'KamilStoch2015';
		private $port = '3307';
		
		
		public function Marcin_connect() {
			//print_r(PDO::getAvailableDrivers());
			
			try {
				
			  	# MySQL with PDO_MYSQL
				$DBH = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->dbname", $this->user, $this->pass);
				$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				// sql to create table
    			$sql = "CREATE TABLE IF NOT EXISTS Ips (
    			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    			firstname VARCHAR(30) NOT NULL,
    			lastname VARCHAR(30) NOT NULL,
    			ips VARCHAR(50),
    			reg_date TIMESTAMP
    			)";
				$DBH->exec($sql);
    			echo "Wszystko idzie dobrze!";
			}
			catch(PDOException $e) {
			    echo "Przepraszamy, spróbuj ponownie!";
    			file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
				//die();
			}
		}
		
		public function Marcin_add($imie, $nazwisko, $ip, $your_email, $nun_name, $nun_email) {
			$this->imie = $imie;
			$this->nazwisko = $nazwisko;
			$this->ip = $ip;
			$this->your_email = $your_email;
			$this->nun_email = $nun_email;
			$this->nun_name = $nun_name;
			try {
				$DBH = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->dbname", $this->user, $this->pass);
				$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				$STH = $DBH->prepare("INSERT INTO Ips ( firstname, lastname, ips, nun_email, nun_name, your_email ) values ( '$this->imie', '$this->nazwisko', '$this->ip', '$this->nun_email', '$this->nun_name', '$this->your_email' )");
				$STH->execute();
			} catch(PDOException $e) {
			    echo "Coś poszło nie tak z insertowaniem!";
    			file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
    			//die();
			}
			
		}
		
		public function Marcin_alter($alter) {
			$this->alter = $alter;
				try {
				$DBH = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->dbname", $this->user, $this->pass);
				$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				$STH = $DBH->prepare("ALTER TABLE Ips ADD $alter VARCHAR( 255 ) AFTER ips");
				$STH->execute();
			} catch(PDOException $e) {
			    echo "Coś poszło nie tak!";
    			file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
    			//die();
			}
			
		}
		
		public function show_col() {
			
				try {
				$DBH = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->dbname", $this->user, $this->pass);
				$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				$STH = $DBH->prepare("SHOW COLUMNS FROM Ips");
				$STH->execute();
			} catch(PDOException $e) {
			    echo "Coś poszło nie tak!";
    			file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
    			//die();
			}
		}
		
		
		
		
	}
