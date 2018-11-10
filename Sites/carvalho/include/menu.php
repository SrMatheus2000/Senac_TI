<!-- <div class="row">
	<div class="col-md-12">
		<form
			class="menu"
			method="get">
			<input
				class="btn"
				type="submit"
				name="login"
				value="Login"/>
		</form>
	</div>
</div>
<br> -->
<?php

if (isset($_GET["rodape"]) == "Créditos") {
	includee("creditos");
} elseif (isset($_POST["cadastro_professor"])) {
	includee("cadastro_professor");
}
	elseif (isset($_POST["deslogar"]) || (!isset($_SESSION["ID"]) && !isset($_SESSION["ID_professor"]))) {
		includee("login");
	}
	// else {
	//
	// 	if(isset($_SESSION["ID_professor"])) includee("materias");
	// 	else includee("logado");
	// }

	if(!$_GET || isset($_GET["pagina_professor"])) includee("pagina_professor");
?>
