<style>
	.menu_fixo {
	    position: -webkit-sticky;
	    position: sticky;
	    top: 0;
	    background-color: #0badc7;
	    z-index: 1;
	}
</style>

<div class="menu_fixo">
	<div class="container-fluid" data-container="menu" style="width: 80%; background-color: #0badc7;">
		<div class="row">
			<div
				style="
					height: 6%;
					display: table-cell;
					float: left;
					width: 40%;">
				<div class="dropdown" style="margin-top: 2%;">
					<button
						onclick="myFunction()"
						class="dropbtn">
						Menu
					</button>
					<div
						id="myDropdown"
						class="dropdown-content">
						<form method="get">
							<input
								type="submit"
								name="pagina_usuario"
								value="Página do Usuário"
								class="btn"
								style="
									width: 100%;
									text-align: left;
									background: #FFF;"/>
							<input
								name="produtos"
								id="produtos"
								value="Produtos"
								type="submit"
								class="btn"
								style="
									width: 100%;
									text-align: left;
									background: #FFF;"/>
							<input
								name="editar"
								id="editar"
								value="Editar"
								type="submit"
								class="btn"
								style="
									width: 100%;
									text-align: left;
									background: #FFF;"/>
						</form>
						<!-- <a href="#">Link 1</a>
						<a href="#">Link 2</a> -->
					</div>
				</div>
			</div>

			<div
				style="
					display: table-cell;
					margin: auto -16%;
					width: 60%;
					float: left;">
				<form method="get" style="margin-top: 2%;">
					<input
						type="search"
						name="pesquisa"
						id="pesquisa"
						placeholder="O que você deseja buscar?"
						style="
							padding: 10px;
							width: 80%;
							border-radius: 5px;
							border: #fff;"/>
					<input
						type="image"
						name="pesquisar"
						id="pesquisar"
						value="Pesquisar"
						src="img/buscar2.png"
						style="
					    position: absolute;
					    margin-left: 5px;
					    width: 35px;"/>
				</form>
			</div>

			<div
				style="
					height: 6%;
					display: table-cell;
					width: 25%;
	  				text-align: right;
					float: right;">
				<form method="get" style="margin-top: 2%; position: relative; margin-right: -112px;">
					<input
						name="desejos"
						id="desejos"
						value="Lista de Desejos"
						type="submit"
						class="dropbtn"/>
					<button name="carrinho"
							id="carrinho"
							value="carrinho"
							type="submit">
					   <img src="img/carrinho4.png"
					        style="height: 54px;
							       width: 54px;
							       background-color:#3498DB;">
					</button>
				</form>
			</div>
		</div>
	</div>
</div>
