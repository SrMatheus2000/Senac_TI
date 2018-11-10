<?php
include("banco.php");
$id = $_POST["id"];

ExecutaSQL("DELETE FROM alunos WHERE id = ".$id." ");

 ?>
