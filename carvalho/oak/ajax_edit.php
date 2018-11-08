<?php
include("banco.php");

//$_FILES["foto"];



$telefone = $_POST["telefone"];
$email = $_POST["email"];
$id = $_POST["id"];
ExecutaSQL("UPDATE alunos SET
  email = '".$email."'
  WHERE
  id = ".$id."
  ");

 ?>
