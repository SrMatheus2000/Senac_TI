<html>
	<head>
		<?php
			include("include/styles.php");
			include("include/libsql.php");
		?>
		<title>Json</title>
	</head>
	<body>
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
							} elseif ($_GET["menu"]=="json") {
								include("include/json.php");
							} elseif ($_GET["menu"]=="puxa_json") {
								include("include/puxa_json.php");
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
	</body>
	<?php
		include("include/scripts.php");
	?>
</html>
