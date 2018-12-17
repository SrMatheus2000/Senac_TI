<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <button class="btn" onclick="window.location.href='index.php'">Voltar</button>
      <br>
      <br>
      <h1>Cadastre seus dados abaixo</h1>
      <br>
      <br>
      <br>
      <form class="form-inline" method="post">
    	  <input type="hidden" name="5" value="Exercício+5"/>
        <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome"/>
        <input class="form-control" type="text" name="email" id="email" placeholder="E-Mail"/>
        <input class="form-control" type="password" name="senha" id="senha" placeholder="Senha"/>
        <input class="form-control" type="password" name="senha2" id="senha2" placeholder="Repita sua Senha"/>
        <input class="btn" type="submit" name="enviar" id="enviar" value="Enviar"/>
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
  text-decoration: none;*/
  cursor: pointer;
}
.btn{
  background-color: #00FF00;
  /* border: none; */
  color: #2F4F4F;
  /* padding: 16px 32px;
  text-align: center;
  font-size: 14px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;*/
  cursor: pointer; 
}

/* .btn:hover {opacity: 1} */
</style>
<style>
.table {
  background-color:#32CD32}
</style>