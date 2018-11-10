<html>
	<head>
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<?php
			include("include/styles.php");
			include("include/libsql.php");
		?>
		<title>EAD é o Carvalho</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 cabecalho">
					<center>
						<h1>EDUCANES</h1>
					</center>
				</div>
			</div>
		</div>
		<div>
			<?php
				includee("menu");
			?>
		</div>
	</body>
	<?php
		include("include/scripts.php");
	?>
</html>
