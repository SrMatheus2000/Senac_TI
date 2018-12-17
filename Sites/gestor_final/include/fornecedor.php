<center>
    <form class="form" method="post" style="width: 25%;">
        <input class="form-control" style=" margin: 10px 0;" type="text" name="nome" id="nome" placeholder="Nome">
        <input class="form-control" style=" margin: 10px 0;" type="text" name="email" id="email" placeholder="Email">
        <input class="form-control" style=" margin: 10px 0;" type="text" name="cnpj" id="cnpj" placeholder="CNPJ">
        <input class="form-control" style=" margin: 10px 0;" type="text" name="endereco" id="endereco" placeholder="Endereço">
        <input class="form-control" style=" margin: 10px 0;" type="text" name="telefone" id="telefone" placeholder="Telefone">
        <input class="form-control" style=" margin: 10px 0;" type="text" name="site" id="site" placeholder="Site">
        <input class="btn" style=" margin: 10px 0;" type="submit" name="cadastrar" value="Cadastrar">
    </form>
</center>

<?php
    if (isset($_POST["cadastrar"])) {
        executasql(
            "INSERT INTO `fornecedor` (
                `nome`, 
                `email`, 
                `cnpj`, 
                `endereco`, 
                `telefone`, 
                `site`
            ) VALUES (
                '".$_POST["nome"]."', 
                '".$_POST["email"]."', 
                '".$_POST["cnpj"]."', 
                '".$_POST["endereco"]."', 
                '".$_POST["telefone"]."', 
                '".$_POST["site"]."'
            );"
        );
    }
?>
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