<html>

	<head>
		<?php
				include("include/styles.php");
				include("include/libsql.php");
			?>
		<title>Pet Shop</title>
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
				<div class="row">
					<?php
						if (!$_GET) {
							include("include/inicio.php");
						} else {
							if ($_GET["menu"] == "inicio") {
								include("include/inicio.php");
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