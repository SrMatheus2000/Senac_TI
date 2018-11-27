<?php
  include("libsql.php");
  $nome = $_POST["nome"];
  $senha = $_POST["senha"];
  $cpf = $_POST["cpf"];
  $email = $_POST["email"];
  $professor = $_POST["professor"];
  executasql(
    "INSERT INTO alunos(
      nome, 
      cpf, 
      email, 
      senha, 
      professor 
    ) VALUES (
      '".$nome."',
      '".$cpf."',
      '".$email."',
      '".$senha."',
      '".$professor."'
    );"
  );
?>
