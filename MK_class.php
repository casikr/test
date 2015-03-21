<?php
    class MK {
    	
		private $serwer;
		private $user;
		private $port;
		private $database;
		private $pass;
		
		
		
		function __construct () {
			
			$this->serwer = "sql.szmida.nazwa.pl";
			$this->user = "szmida_5";
			$this->port = "3307";
			$this->database = "szmida_5";
			$this->pass = "KamilStoch2014";	
			
		}
		
		public function mk_connect() {
					
				
				$this->con = mysqli_connect($this->serwer, $this->user, $this->pass, $this->database, $this->port);

				// Check connection
				if (mysqli_connect_errno()) 
	  				{
	  					echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  				} //else {echo "fine";}
				}
		
		public function mk_create_tb() {
				
			$this->mk_connect();
			$check = mysqli_query($this->con, "SHOW TABLES like 'users'");
			if($check == false) {
				$sql = "CREATE Table users (Id int NOT NULL AUTO_INCREMENT, Login VARCHAR(30), Password VARCHAR(30), PRIMARY KEY (Id))";
				if(!mysqli_query($this->con, $sql)) {
					echo "Error";
					}
				}
			}
			
		
		public function register($login, $password) {
				
			$this->mk_connect();
			$this->s_login = mysqli_real_escape_string($this->con, trim($login));
			$this->s_password = mysqli_real_escape_string($this->con, trim($password));
			$query = "Insert into users (Login, Password) Values('$this->s_login', MD5('$this->s_password'))";
			mysqli_query($this->con, $query);
			
		}
		
		public function mk_connect_db($database) {
				$serwer = "sql.szmida.nazwa.pl";
				$user = "szmida_5";
				$port = "3307";
				$pass = "KamilStoch2014";
				
				$con = mysqli_connect($serwer, $user, $pass, $database, $port);

				// Check connection
				if (mysqli_connect_errno()) 
	  				{
	  					echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  				} //else {echo "fine";}
			}
			
		public function mk_show_registered() {
				
			$this->mk_connect();	
			$show = mysqli_query($this->con, "SELECT Login from users");	
			
			while ($row = mysqli_fetch_row($show)) 
				{
					printf ("%s (%s)\n", $row[0], $row[1]);
				}
		} 
		
		public function mk_validate($handle, $input) {
			
			$this->mk_connect();
			
			$result = mysqli_query($this->con, "SELECT Login FROM users WHERE Login='$input'" );
			
			if (mysqli_num_rows($result) > 0) {
				echo "<p>Login jest już w bazie danych zmień login</p>";
			}
			
			
			
		}
		
	}
?>