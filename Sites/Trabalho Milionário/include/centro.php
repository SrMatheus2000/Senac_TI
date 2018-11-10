<div class="container-fluid" style="width: 80%;" >
	<div class="row">
		<div class="col-md-2">
			<?php
				include("include/categorias.php");
			?>
		</div>
		<!-- <center> -->
		<div class="col-md-8">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 ofertas">
						<?php
							include("include/ofertas.php");
						?>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<?php
							include("include/recomendados.php");
						?>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<?php
							include("include/corpo.php");
						?>
					</div>
				</div>
			</div>
		</div>
	<!-- </center> -->
		<div class="col-md-2">
			<?php
				include("include/anuncios.php");
			?>
		</div>
	</div>
</div>
