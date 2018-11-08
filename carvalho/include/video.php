

      <?php
      include "libsql.php";
      include "styles.php";
       ?>

<html>
  <body style="background-color: gray;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-2">
          <br>
          <!-- <a href="logado.php" class="btn btn-info">Voltar</a> -->
          </div>
        <div class="col-8">
    <div class="embed-responsive embed-responsive-16by9" style="top:15%;">
      <?php $todas_aulas = selecionaumdado("Select * from cad_aula where id = ".$_GET["video"]);
        if($todas_aulas["id"] == $_GET["video"]){
          ?>
        <iframe class="embed-responsive-item" src="<?php print($todas_aulas["link_video"]) ?>" allowfullscreen></iframe>
        <?php } ?>
      </div>
    </div>
  <div class="col-2"></div></div></div>
    <?php include "scripts.php"; ?>
  </body>
</html>
