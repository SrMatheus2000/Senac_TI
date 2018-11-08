<?php

include("banco.php");
  $nome = $_POST["nome"];
  $senha = $_POST["senha"];
  $cpf = $_POST["cpf"];
  $email = $_POST["email"];


  ExecutaSQL("INSERT INTO alunos(nome, cpf, email, senha ) VALUES
    (
      '".$nome."',
      '".$cpf."',
      '".$email."',
      '".$senha."'
    );
  ");

?>
