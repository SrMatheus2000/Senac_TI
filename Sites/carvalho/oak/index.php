<?php
include("banco.php");
 ?>
<html lang="br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="jquery.js"></script>
    <script src="sticky.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Professor</title>
  </head>
  <body>
    <div style="position: sticky;
    top: 0; z-index: 1;">
      <form>
  <input value="Novo Cadastro" type="submit" class="btn" name="novo" id="novo"/>
  <input value="Gestor" type="submit" class="btn" name="gestor"  id="editar"/>
</form>
</div>
  <?php

      if (isset($_GET["gestor"])){
      include("gestor_professor.php");
    }elseif(isset($_GET["novo"])){
      include("cadastro_professor.php");
    }
  ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
