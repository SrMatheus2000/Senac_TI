<?php
	function conectarbanco() {
		$host = "localhost";
		$banco = "id7511552_trabalho";
		$usuario = "id7511552_trabalho";
		$senha = "12345";
		$porta = "3306";
		$conn = new PDO ('mysql:host='.$host.';port='.$porta.';dbname='.$banco.'',$usuario, $senha);
		return $conn;
	}

	function executasql($sql) {
		$conn = conectarbanco();
		$conn->query($sql);
	}

	function selecionadiversosdados($sql) {
		$conn = conectarbanco();
		$retorno = $conn->prepare($sql);
		$retorno->execute();
		return $retorno;
	}

	function selecionaumdado($sql) {
		$conn = conectarbanco();
		$retorno = $conn->query($sql);
		return $retorno->fetch();
	}

	if (isset($_POST["entrar"])) {
		$alunos = selecionaumdado ("SELECT * FROM alunos WHERE email = '".$_POST["email"]."' AND senha = '".$_POST["senha"]."'");
		$professores = selecionaumdado ("SELECT * FROM professores WHERE email = '".$_POST["email"]."' AND senha = '".$_POST["senha"]."'");
		if ($alunos["id"] != ""){
			session_start();
			$_SESSION["ID"] = $alunos ["id"];
			$_SESSION["NOME"] = $alunos ["nome"];
			$_SESSION["EMAIL"] = $alunos ["email"];
			includee("logado");
		} elseif($professores["id"] != "") {
			session_start();
			$_SESSION["ID_professor"] = $professores ["id"];
			$_SESSION["NOME_professor"] = $professores ["nome"];
			$_SESSION["EMAIL_professor"] = $professores ["email"];
		}
	} else {
		if (isset($_POST["deslogar"])) {
			session_start();
			session_destroy();
		?><script type="text/javascript">
			window.location = "index.php";
		</script><?php
		}
	}
	
	function includee($a){
		if (!isset($_SESSION)) {
			session_start();
		}
		if ($a == "menu") {
			include "include/menu.php";
		} elseif ($a == "cadastro_professor") {
			include "include/cadastro_professor.php";
		} elseif ($a == "login") {
			include "include/login.php";
		} elseif (isset($_SESSION["ID_professor"]) != "") {
            if ($a == "pagina_professor") {
				include "include/pagina_professor.php";
			} elseif ($a == "gestor_alunos") {
				include "include/gestor_alunos.php";
			} elseif ($a == "cadastro_alunos") {
				include "include/cadastro_alunos.php";
			} elseif ($a == "materias") {
				include "include/materias.php";
			} elseif ($a == "nova_materia") {
				include "include/nova_materia.php";
			} elseif ($a == "aulas") {
				include "include/aulas.php";
			} elseif ($a == "nova_aula") {
				include "include/nova_aula.php";
			}
		} elseif (isset($_SESSION["ID"]) != "") {
			if ($a == "logado") {
				include "include/logado.php";
			}
		}
	}
?>
