<?php

	$produtos = selecionadiversosdados("SELECT * FROM produto");

 ?>

<h1>Corpo do Site (itens padrao)</h1>

<div style="text-align: center;">
	<?php foreach($produtos as $product) : ?>
		<div class="MaisProcurados">
			<div class="TITULO">
				<a href="?produto=<?php print($product["id"])?>"><?php echo $product['nome']?></a>
			</div>
			<div class="imgPRODUTO">
				<a href="?produto=<?php print($product["id"])?>"><img src="img/produtos/<?php print($product["imagem"]);?>"/></a>
			</div>
			<div class="PRECO">
				<a href="?produto=<?php print($product["id"])?>">R$<?php echo ($product['preco'])?></a>
			</div>
			<a href="?carrinho=carrinho&acao=add&id=<?php echo $product['id']?>" class="card-link"><div class="CARRINHO_ADD">
				ADICIONE AO CARRINHO
			</div></a>
		</div>
	<?php endforeach;?>
</div>
