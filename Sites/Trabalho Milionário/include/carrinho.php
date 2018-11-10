<?php

	$pdoConnection = conectarbanco();

	if(isset($_GET['acao']) && in_array($_GET['acao'], array('add', 'del', 'up'))) {

		if($_GET['acao'] == 'add' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){
			addCart($_GET['id'], 1);
		}

		if($_GET['acao'] == 'del' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){
			deleteCart($_GET['id']);
		}

		if($_GET['acao'] == 'atualizar'){
			if(isset($_POST['prod']) && is_array($_POST['prod'])){
				foreach($_POST['prod'] as $id => $qtd){
						updateCart($id, $qtd);
				}
			}
		}

		header('location: ?carrinho=carrinho');
	}

	$resultsCarts = getContentCart($pdoConnection);
	$totalCarts  = getTotalCart($pdoConnection);
?>

	<div class="container">
		<div class="card mt-5">
			 <div class="card-body">
	    		<h4 class="card-title">Meu Carrinho</h4>
	    	</div>
		</div>

		<?php if($resultsCarts) : ?>

			<table class="table table-strip">
				<thead>
					<tr>
						<th><div style="text-align:center;">Produto(s)</div></th>
						<th><div style="text-align:center;">Quantidade</div></th>
						<th><div style="text-align:center;">Preço</div></th>
						<th><div style="text-align:center;">Subtotal</div></th>
						<th><div style="text-align:center;">Ação</div></th>
					</tr>
				</thead>
				<tbody>
				  <?php foreach($resultsCarts as $result) : ?>
					<tr>
						<td><div style="float:left;"><img src="img/produtos/<?php print($result["imagem"]);?>" style="width:60px; height:60px;"/></div>
							<div style="float:left; margin:18 0 0 15; display: inline-block;"><a href="?produto=<?php print($result["id"])?>"><?php echo $result['name']?></a></div></td>
						<td>
						<div style="margin-top:15px;" class="col-xs-4 col-xs-offset-4">
							<div class="input-group number-spinner">
								<span class="input-group-btn data-dwn">
									<button class="btn btn-default btn-info" data-dir="dwn" id="menos_item"><span class="glyphicon glyphicon-minus">-</span></button>
								</span>
								<input id="carrinho_quantidade" type="number" class="form-control text-center" value="1" min="1">
								<span class="input-group-btn data-up">
									<button class="btn btn-default btn-info" data-dir="up" id="mais_item"><span class="glyphicon glyphicon-plus">+</span></button>
								</span>
							</div>
						</div>
						</td>
						<!-- <td><div id="carrinho_preco" style="margin-top:15px; text-align:center;">1</div></td> -->
						<td><div>R$</div><div id="carrinho_preco" style="margin-top:15px; text-align:center;"><?php echo number_format($result['price'], 2, ',', '.')?></div></td>
						<td><div id="carrinho_subtotal" style="margin-top:15px; text-align:center;">R$<?php echo number_format($result['subtotal'], 2, ',', '.')?></div></td>
						<td><div style="margin-top:15px; text-align:center;"><a href="?carrinho=carrinho&acao=del&id=<?php echo $result['id']?>" class="btn btn-danger">Remover</a></div></td>
					</tr>
				<?php endforeach;?>
				 <tr>
				 	<td colspan="3" class="text-right"><b>Total: </b></td>
				 	<td id="carrinho_total">R$<?php echo number_format($totalCarts, 2, ',', '.')?></td>
				 </tr>
				</tbody>
			</table>
		<a class="btn btn-info" href="index.php">Continuar Comprando</a>
		<a class="btn btn-success" style="float:right;" href="#">Finalizar Compra</a>
	<?php endif?>
	</div><br><br>


	<div id="qualquerum"></div>
