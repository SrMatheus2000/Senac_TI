<?php

	function ConectarBanco () {

		$host = "localhost";
		$banco = "id7511552_trabalho";
		$usuario = "id7511552_trabalho";
		$senha = "12345";
		$porta = "3306";

		$conn = new PDO ('mysql:host='.$host.';port='.$porta.';dbname='.$banco.'',$usuario, $senha);
		return $conn;
	}

	function ExecutaSQL ($sql) {
		$conn = ConectarBanco ();
		$conn->query ($sql);
	}
	function SelecionaDiversosDados ($sql) {
		$conn = ConectarBanco ();
		$retorno = $conn->prepare($sql);
		$retorno -> execute ();
		return $retorno;
	}
	function SelecionaUmDado ($sql) {
		$conn = ConectarBanco ();
		$retorno = $conn->query($sql);
		return $retorno->fetch();
	}
?>
