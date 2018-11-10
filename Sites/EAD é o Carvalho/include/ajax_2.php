<?php
  include("libsql.php");
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $telefone = $_POST["telefone"];
  $cpf = $_POST["cpf"];
  executasql(
    "INSERT INTO professores(
      nome,  
      email, 
      senha, 
      telefone, 
      cpf 
    ) VALUES (
      '".$nome."',
      '".$email."',
      '".$senha."',
      '".$telefone."',
      '".$cpf."'
    );"
  );
?>
