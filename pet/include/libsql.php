<?php
	function conectarbanco(){
		/*Alterar dados de conexão com banco.*/
		$host = "localhost";
		$banco = "id6402806_lisiano";
		$usuario = "id6402806_admin";
		$senha = "1234567890";
		$porta = "3306";

		/* Não mexer. */
		$conn = new PDO('mysql:host=' . $host . ';port=' . $porta . ';dbname=' . $banco . '', $usuario, $senha);
		return $conn;
	}

	function executasql($sql){
		$conn = conectarbanco();
		$conn->query($sql);
	}

	function selecionadiversosdados($sql){
		$conn = conectarbanco();
		$retorno = $conn->prepare($sql);
		$retorno->execute();
		return $retorno;
	}

	function selecionaumdado($sql){
		$conn = conectarbanco();
		$retorno = $conn->query($sql);
		return $retorno->fetch();
	}
?>
