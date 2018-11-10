<?php
	if (isset($_GET["rodape"]) == "Créditos") {
		includee("creditos");
	} elseif (isset($_POST["cadastro_professor"])) {
		includee("cadastro_professor");
	} elseif (isset($_POST["deslogar"]) || (!isset($_SESSION["ID"]) && !isset($_SESSION["ID_professor"]))) {
		includee("login");
	}
	if (!$_GET || isset($_GET["pagina_professor"])) includee("pagina_professor");
?>