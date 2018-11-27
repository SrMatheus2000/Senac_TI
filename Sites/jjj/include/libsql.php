<?php
	function conectarbanco(){
		/*Alterar dados de conexão com banco.*/
		$host = "localhost";
		$banco = "gestor";
		$usuario = "root";
		$senha = "";
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

	function includee ($a) {
		if ($a == 0) {
			include 'include/inicio.php';
		} elseif ($a == 3) {
			include 'include/cadastro.php';
		} elseif ($a == 4) {
			include 'include/login.php';
		} elseif ($_SESSION) {
			if ($a == 5) {
				include 'include/gestor.php';
			} elseif ($a == 6) {
				include 'include/menu.php';
			} elseif ($a == 10) {
				include 'include/imgupload.php';
			} elseif ($a == 1) {
				include 'include/salario.php';
			} elseif ($a == 2) {
				include 'include/despesa.php';
			} elseif ($a == 9) {
				include 'include/logs.php';
			} elseif ($a == 11) {
				include 'include/cliente.php';
			} elseif ($a == 12) {
				include 'include/fornecedor.php';
			}
		} else {
			echo "Página não permitida!";
		}
	}

	function gravalog($pagina) {
		executasql (
			"INSERT INTO `log` (
				idusuario,
				data,
				pagina
			) VALUES (
				'".$_SESSION["id"]."',
				now(),
				'".$pagina."'
			);"
		);
	}
	
?>
