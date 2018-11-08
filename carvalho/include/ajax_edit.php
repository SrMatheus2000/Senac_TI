<?php
include("libsql.php");

//$_FILES["foto"];


$email = $_POST["email"];
$id = $_POST["id"];
ExecutaSQL("UPDATE alunos SET
  email = '".$email."'
  WHERE
  id = ".$id."
  ");

 ?>
