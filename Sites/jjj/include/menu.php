<div class="container-fluid" style="width: 120%;">
  <div class="row">
    <div class="col-md-12">
      <h1>Gestor Empresarial
        <img
          src="imagens/<?php echo ($_SESSION["imagem"]); ?>"
          style="height: 50px; width: 50px;"/>
      </h1>
      <form method="get">
        <input class="btn" type="submit" name="voltar1" value="Página Inicial"/>
        <input class="btn" type="submit" name="despesa" value="Cadastrar Despesa"/>
        <input class="btn" type="submit" name="salario" value="Cadastrar Salario"/>
        <input class="btn" type="submit" name="cliente" value="Cadastrar Cliente"/>
        <input class="btn" type="submit" name="fornecedor" value="Cadastrar Fornecedor"/>
        <input class="btn" type="submit" name="logs" value="Logs"/>
        <input class="btn" type="submit" name="perfilimg" value="Imagem de Perfil"/>
        <input class="btn" type="submit" name="sair" value="Sair (<?php echo($_SESSION["nome"]);?>)"/>
      </form>
    </div>
  </div>
</div>