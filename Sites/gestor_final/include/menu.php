<div class="container-fluid d-flex justify-content-center" style="width: 100%;">
  <div class="row">
    <div class="col-md-12">
      <h1>Gestor Empresarial
        <img
          src="imagens/<?php echo ($_SESSION["imagem"]); ?>"
          style="height: 50px; width: 50px;"/>
      </h1>
      <form method="get">
        <input class="btn bun" style="width: 140px;" type="submit" name="voltar1" value="Página Inicial"/>
        <input class="btn bun" style="width: 165px;" type="submit" name="despesa" value="Cadastrar Despesa"/>
        <input class="btn bun" style="width: 140px;" type="submit" name="lucro" value="Cadastrar Lucro"/>
        <input class="btn bun" style="width: 165px;" type="submit" name="cliente" value="Cadastrar Cliente"/>
        <input class="btn bun" style="width: 190px;" type="submit" name="fornecedor" value="Cadastrar Fornecedor"/>
        <input class="btn bun" style="width: 75px;" type="submit" name="logs" value="Logs"/>
        <input class="btn bun" style="width: 165px;" type="submit" name="perfilimg" value="Imagem de Perfil"/>
        <input class="btn bun" style="width: 135px;" type="submit" name="sair" value="Sair (<?php echo($_SESSION["nome"]);?>)"/>
      </form>
    </div>
  </div>
</div>
<style>
<body>
  background-color:#98FB98;
</body>
.form-control {
  background-color: #7CFC00;
  /* border: none; */
  color: #2F4F4F;
  /* padding: 16px 32px;
  text-align: center;
  font-size: 14px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer; */
}
.btn{
  background-color: #00FF00;
  /* border: none; */
  color: #2F4F4F;
  /* padding: 16px 32px;
  text-align: center;
  font-size: 14px;*/
  margin: 0px 7.6px;
  
  /* opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;*/
  cursor: pointer; 
}

.bun{
  /* background-color: #00FF00; */
  /* border: none; */
  /* color: #2F4F4F; */
  /* padding: 16px 32px;
  */font-weight: bold;/*
  font-size: 14px;*/
  /* margin: 0px 7.6px;: */
  height: 60px;
  /* opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;*/
  cursor: pointer;
   font-size: 104%;
}
/* .btn:hover {opacity: 1} */
</style>
<style>
.table {
  background-color:#32CD32}
</style>