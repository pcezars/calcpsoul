<?php

require "conexao.php";

class BuscarService{
    private $conexao;
	private $poke;

	public function __construct(Conexao $conexao) {
		$this->conexao = $conexao->conectar();
		
	}

	public function load() { //read
		$query = '
        select 
            * 
        from 
            tb_lista
		ORDER BY
			id

		';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

    public function recuperar() { //read
		$query = '
        select 
            * 
        from 
            tb_lista
        WHERE
            id = ? 

		';
		$stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $_GET['pokemon']);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

$conexao = new Conexao();
$busca = new BuscarService($conexao);
$poke = $busca->recuperar();
$lista = $busca->load();


?>