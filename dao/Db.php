<?php 
	
	/**
	* 
	*/
	class Db
	{	
		private $conn;

		public function conectar()
		{
			try {
				
				$this->conn = new PDO("mysql:dbname=php_crud_pdo;host=localhost", "root", "");
				//$this->conn = new PDO("pgsql:dbname=php_crud_pdo;host=localhost", "postgres", "pantera");
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $this->conn;
			} catch (Exception $e) {
				echo "Erro: " . $e->getMessage();
			}
		}
		
	}

 ?>