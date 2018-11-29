<html>
	<head>
		<?php
			include("include/styles.php");
			include("include/libsql.php");
		?>
		<title>Gestor Empresarial</title>
	</head>
	<body>
		<!-- <div class="container"> -->
			<?php 
				if (isset($_GET["voltar"])) {
					includee (0);
				} elseif (isset($_GET["usuario"])) {
					includee (11);
				} elseif (isset($_POST["enviarimg"])) {
					session_start ();
					$imagem = $_FILES["imgperfil"];
					$pasta = "imagens/";
					$imageFileType = strtolower (
						pathinfo(
							$imagem["name"],
							PATHINFO_EXTENSION
						)
					);
					$imagem["name"] = $_POST["id"].".png";
					if ($imageFileType != "png") {
						includee (6);
						includee (10);
						echo "Erro! Imagem deve estar no formato .png!";
					} elseif (
							move_uploaded_file (
								$imagem["tmp_name"],
								$pasta.$imagem["name"]
							)
						) {
						executasql (
							"UPDATE `usuario`
							SET
								imagem   = '".$imagem["name"]."'
							WHERE id =  ".$_POST["id"]
						);
					$_SESSION["imagem"] = $imagem["name"];
					includee (6);
					includee (5);
					echo "Imagem enviada com sucesso!";
					} else {
						includee (6);
						includee (5);
						echo "Arquivo não enviado com sucesso!";
					}
				} else if (isset($_GET["cliente"])) {
					session_start ();
					gravalog ("Cliente");
					includee (6);
					includee (11);
				} else if (isset($_GET["fornecedor"])) {
					session_start ();
					gravalog ("Fornecedor");
					includee (6);
					includee (12);
				} else if (isset($_GET["lucro"])) {
					session_start ();
					gravalog ("Lucro");
					includee (6);
					includee (13);
				} else if (isset($_GET["perfilimg"])) {
					session_start ();
					gravalog ("Imagem de Perfil");
					includee (6);
					includee (10);
				} else if (isset($_POST["Imprimir"])) {
					session_start ();
					gravalog ("Imprimir Comprovante");
					includee (6);
					includee (5);
				} else if (isset($_POST["envcomp"])) {
					session_start ();
					gravalog ("Enviar Comprovante");
					$comprovante = $_FILES["arquivo"];
					$pasta = "comprovante/";
					$extencao = strtolower (
						pathinfo (
							$comprovante["name"],
							PATHINFO_EXTENSION
						)
					);
					$comprovante["name"] = $_POST["id"].".txt";
					if ($extencao != "txt") {
						includee (6);
						includee (5);
						echo "Erro! Recibo deve estar no formato .txt!";
					} elseif (
							move_uploaded_file (
								$comprovante["tmp_name"],
								$pasta.$comprovante["name"]
							)
						) {
						executasql (
							"UPDATE `despesa`
							SET
								comprovante   = '".$comprovante["name"]."'
							WHERE id =  ".$_POST["id"]
						);
					includee (6);
					includee (5);
						echo "Arquivo enviado com sucesso!";
					} else {
					includee (6);
					includee (5);
						echo "Arquivo não enviado com sucesso!";
					}

				}else if (isset($_POST["Salvar2"])) {
					session_start ();
					gravalog ("Editar Despesa");
					executasql (
						"UPDATE `despesa`
						SET
							nome   = '".$_POST["Ednome"]."',
							valor  = '".$_POST["Edvalor"]."'
						WHERE id =  ".$_POST["Salvar2"]
					);
					includee (6);
					includee (5);
				} else if (isset($_POST["Editar"])) {
					session_start ();
					gravalog ("Editar");
					includee (6);
					includee (5);
				} else if (isset($_POST["Deletar"])) {
					session_start ();
					executasql (
						"DELETE FROM `log`
						WHERE id = ".$_POST["Deletar"]
					);
					includee (6);
					includee (9);
				} else if (isset($_POST["Pagar"])) {
					session_start ();
					gravalog ("Pagar");
					executasql (
						"UPDATE `despesa`
						SET pago = 1, pagoem = now()
						WHERE id = ".$_POST["Pagar"]
					);
					includee (6);
					includee (5);
				} else if (isset($_POST["Apagar"])) {
					session_start ();
					executasql (
							"DELETE FROM `usuario`
							WHERE id = ".$_POST["Apagar"]
						);
					includee (6);
					includee (7);
				} else if (isset($_GET["logs"])) {
					session_start ();
					gravalog ("Log");
					includee (6);
					includee (9);
				} else if (isset($_POST["Excluir"])) {
					session_start ();
					gravalog ("Excluir Despesa");
					executasql (
						"DELETE FROM `despesa`
						WHERE id = ".$_POST["Excluir"]
					);
					unlink ("comprovante/".$_POST["Excluir"].".txt");
					includee (6);
					includee (5);
				} else if (isset($_GET["salario"]) && isset($_POST["salvar"])) {
					session_start ();
					gravalog ("Salário");
					$salario = str_replace(".", "", $_POST["salario"]);
					$salario = str_replace(",", ".", $salario);
					executasql (
						"INSERT INTO `salario` (
							valor,
							data,
							idusuario
						) VALUES (
							'".$salario."',
							now(),
							'".$_SESSION["id"]."'
						);"
					);
					includee (6);
					includee (5);
				} else if (isset($_GET["salario"])) {
					session_start ();
					gravalog ("Salário");
					includee (6);
					includee (1);
				} else if (isset($_POST["salvar1"])) {
					session_start ();
					gravalog ("Despesa");
					$valor = str_replace(".", "", $_POST["valor"]);
					$valor = str_replace(",", ".", $valor);
					executasql (
						"INSERT INTO `despesa` (
							nome,
							valor,
							idusuario,
							clifor
						) VALUES (
							'".$_POST["nome"]."',
							'".$valor."',
							'".$_SESSION["id"]."',
							'".$_POST["clifor"]."'
						);"
					);
					includee (6);
					includee (2);
					echo "Despesa cadastrada com sucesso!";
				} else if (isset($_GET["despesa"])) {
					session_start ();
					gravalog ("Despesa");
					includee (6);
					includee (2);
				} else if (isset($_GET["cadastro"]) && isset($_POST["enviar"])) {
					if ($_POST["senha"] == $_POST["senha2"]) {
						if ($_POST["nome"]  != ""
						&& $_POST["email"] != ""
						&& $_POST["senha"] != "") {
							$email = selecionaumdado(
								"SELECT *
								FROM `usuario`
								WHERE email = '".$_POST["email"]."'"
							);
							if (!$email) {
								executasql (
									"INSERT INTO `usuario` (
										nome,
										email,
										senha
									) VALUES (
										'".$_POST["nome"]."',
										'".$_POST["email"]."',
										'".$_POST["senha"]."'
									);"
								);
								includee (0);
								echo "Cadastro efetuado com sucesso!";
							} else {
								includee (3);
								echo "Email ja cadastrado!";
							}
						} else {
							includee (3);
							echo "Digite todos os seus dados!";
						}
					} else {
						includee (3);
						echo "As senhas nao batem!";
					}
				} else if (isset($_GET["cadastro"])) {
					includee(3);
				} else if (isset($_GET["login"]) && isset($_POST["login"])) {
					if ($_POST["usuario"] != ""
					&& $_POST["senha"]   != "" ) {
						$usuario = selecionaumdado (
							"SELECT *
							FROM `usuario`
							WHERE (
								email = '".$_POST["usuario"]."'
								OR
								nome  = '".$_POST["usuario"]."'
							) AND
							senha = '".$_POST["senha"]."'"
						);
						if ($usuario) {
							session_start();
							$_SESSION["id"]         = $usuario["id"];
							$_SESSION["nome"]       = $usuario["nome"];
							$_SESSION["email"]      = $usuario["email"];
							$_SESSION["usuariopai"] = $usuario["usuariopai"];
							$_SESSION["imagem"] 		= $usuario["imagem"];
							gravalog ("Login");
							includee (6);
							includee (5);
						} else {
							includee (4);
							echo "Usuário ou senha incorretos!";
						}
					} else {
						includee (4);
						echo "Digite todos os seus dados!";
					}
				} else if (isset($_GET["login"])) {
					includee (4);
				} else if (isset($_GET["gestor"])) {
					session_start ();
					gravalog ("Gestor");
					includee (5);
				} else if (isset($_GET["voltar1"])) {
					session_start ();
					gravalog ("Página Inicial");
					includee (6);
					includee (5);
				} else if (isset($_GET["sair"])) {
					session_start ();
					gravalog ("Sair");
					session_destroy ();
					includee (0);
				} else {
					includee (0);
				}
			?>
		<!-- </div> -->
	</body>
	<?php
		include("include/scripts.php");
	?>
</html>
