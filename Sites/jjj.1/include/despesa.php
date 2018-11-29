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
        <form class="form" method="post" style="width: 25%;">
          <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome">
          <input class="form-control" type="text" name="valor" id="valor" placeholder="Valor">
          <select name="clifor" id="clifor" class="form-control" style='font-weight: bold;'>
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

<?php

  

?>