<?php
  // $clientes = selecionadiversosdados(
  //   "SELECT * FROM `cliente`"
  // );

  $fornecedores = selecionadiversosdados(
    "SELECT * FROM `fornecedor`"
  );

?>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <center>
        <h2>Digite sua despesa</h2>
        <form class="form-group" method="post" style="width: 25%;">
          <input class="form-control" style=" margin: 10px 0;" type="text" name="nome" id="nome" placeholder="Nome">
          <input class="form-control"  style=" margin: 10px 0;"type="text" name="valor" id="valor" placeholder="Valor">
          <select class="form-control" name="clifor"  id="clifor"  style=" margin: 10px 0; font-weight: bold;">
            <?php
            // echo "<option value='' style='font-weight: bold;'>Clientes:</option>";
            // foreach ($clientes as $cliente) {
            //   echo "<option value='" . $cliente["nome"] ."'>". $cliente["nome"] ."</option>";
            // }
            echo "<option value='' style='font-weight: bold;'>Fornecedores:</option>";
            foreach ($fornecedores as $fornecedor) {
              echo "<option value='". $fornecedor["nome"] ."'>". $fornecedor["nome"] ."</option>";
            }
            ?>
          </select>
          <input class="btn" type="submit" name="salvar1" id="salvar1" placeholder="Salvar">
        </form>
      </center>
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
  font-size: 14px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer; */
}

/* .btn:hover {opacity: 1} */
</style>
<style>
.table {
  background-color:#32CD32}
</style>