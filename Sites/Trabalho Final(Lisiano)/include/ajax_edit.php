<?php
  include("libsql.php");
  $email = $_POST["email"];
  $id = $_POST["id"];
  executasql(
    "UPDATE alunos 
    SET
      email = '".$email."'
    WHERE
      id = ".$id."
    "
  );
 ?>
