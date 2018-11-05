<html>
	<head>
		<?php
			include("include/styles.php");
			include("include/libsql.php");
		?>
		<title>Pet Shop</title>
	</head>
	<body>
		<!-- cabecalho -->
		<div class="cabecalho container-fluid">
			<div class="container">
	 			<div class="row">
					<div class="col-md-1">
						<img src="img/logo-pet.png">
					</div>
					<div class="col-md-11">
						<h1 class="titulo">PET SHOP</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- menu -->
		<div class="menu container-fluid  justify-content-md-center">
			<div class="container">
				<div class="row">
					<?php include("include/menu.php");?>
				</div>
			</div>
		</div>
		<!-- conteudo -->
		<div class="fundo container-fluid">
			<div class="container">
				<div class="row" >
					<?php
						if (!$_GET) {
							include("include/inicio.php");
						} else {
							if ($_GET["menu"]=="inicio") {
								include("include/inicio.php");
							} elseif ($_GET["menu"]=="servicos") {
								include("include/servicos.php");
							} elseif ($_GET["menu"]=="produtos") {
								include("include/produtos.php");
							} elseif ($_GET["menu"]=="galeria") {
								include("include/galeria.php");
							} elseif ($_GET["menu"]=="contato") {
								include("include/contato.php");
							}
						}
					?>
				</div>
			</div>
		</div>
		<!-- rodape -->
		<div class="rodape container-fluid">
			<div class="container">
				<h4>
					<img src="img/osso-footer.png"/>
					<text style="vertical-align: middle;">Rua Docs, 1331 - Sala 002</text>
				</h4>
			</div>
		</div>
	</body>
	<?php
		include("include/scripts.php");
	?>
</html>
