<?php

class Conexao {

	private $host = 'DB_HOST';
	private $dbname = 'DB_NAME';
	private $user = 'DB_USER';
	private $pass = 'DB_PASS';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessege().'</p>';
		}
	}
}

?>