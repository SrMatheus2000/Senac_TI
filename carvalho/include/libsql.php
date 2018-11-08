<?php
	function conectarbanco(){
		/*Alterar dados de conexão com banco.*/
		$host = "localhost";
		$banco = "id7511552_trabalho";
		$usuario = "id7511552_trabalho";
		$senha = "12345";
		$porta = "3306";

		$conn = new PDO ('mysql:host='.$host.';port='.$porta.';dbname='.$banco.'',$usuario, $senha);
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


	if (isset($_POST["entrar"])){
		$alunos = selecionaumdado ("SELECT * FROM alunos WHERE email = '".$_POST["email"]."' AND senha = '".$_POST["senha"]."'");
		$professores = selecionaumdado ("SELECT * FROM professores WHERE email = '".$_POST["email"]."' AND senha = '".$_POST["senha"]."'");
		// var_dump($professores);
		// var_dump($alunos);

		if ($alunos["id"] != ""){

			session_start();

			$_SESSION["ID"] = $alunos ["id"];
			$_SESSION["NOME"] = $alunos ["nome"];
			$_SESSION["EMAIL"] = $alunos ["email"];

			includee("logado");

			// var_dump($_SESSION);
		}

		elseif($professores["id"] != ""){
			session_start();

			$_SESSION["ID_professor"] = $professores ["id"];
			$_SESSION["NOME_professor"] = $professores ["nome"];
			$_SESSION["EMAIL_professor"] = $professores ["email"];

			// includee("materias");

			// var_dump($_SESSION);
		}
	}else {
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
			// session_start();
			include "include/menu.php";
		}

		elseif ($a == "cadastro_professor") {
			include "include/cadastro_professor.php";
		}

		elseif ($a == "login") {
			include "include/login.php";
		}

		elseif (isset($_SESSION["ID_professor"]) != "") {

            if ($a == "pagina_professor") {
				// session_start();
				include "include/pagina_professor.php";
			}

			elseif ($a == "gestor_alunos") {
				include "include/gestor_alunos.php";
			}

			elseif ($a == "cadastro_alunos") {
				include "include/cadastro_alunos.php";
			}

            elseif ($a == "materias") {
				// session_start();
				include "include/materias.php";
			}

			elseif ($a == "nova_materia") {
				// session_start();
				include "include/nova_materia.php";
			}

			elseif ($a == "aulas") {
				// session_start();
				include "include/aulas.php";
			}

			elseif ($a == "nova_aula") {
				// session_start();
				include "include/nova_aula.php";
			}
		}
		elseif (isset($_SESSION["ID"]) != "") {
			if ($a == "logado") {
				// if (isset($_SESSION["ID_professor"])) {
				// 	include "include/materias.php";
				// } elseif (isset($_SESSION["ID"])) {
					include "include/logado.php";
				// }
			}
		}

	}

	// if (!$_GET) includee("login");
		// if(isset($_GET["materias"])) includee("materias");
		// elseif (isset($_GET["nova_materia"])) includee("nova_materia");
		// elseif (isset($_GET["aulas"])) includee("aulas");
		// elseif (isset($_GET["nova_aula"]) || isset($_GET["editar_aula"])) includee("nova_aula");



		// var_dump($_SESSION);
		// var_dump($alunos);
		// var_dump($professores);


?>
