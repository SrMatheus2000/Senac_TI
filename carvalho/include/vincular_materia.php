

<?php
// include("libsql.php");
$materia = SelecionaDiversosDados("SELECT * FROM cad_materia");

if($_POST){
  ExecutaSQL("DELETE FROM aluno_materias WHERE idaluno = '".$_GET["id"]."'");

  foreach ($_POST as $key => $value) {
    ExecutaSQL("INSERT INTO aluno_materias (idaluno,idmateria) VALUES ('".$_GET["id"]."',$key)");
  }
}
?>

    <div class="container">
      <!-- <a class="btn btn-info" style="text-decoration: none; position: relative; margin-top:20px" href="vincular_aluno.php">Voltar</a> -->
      <h2 align="center" style="padding-top:20px; padding-bottom: 20px;">Vincule o aluno à matéria:</h2>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Matéria</th>
            <!-- <th scope="col">Dia</th>
            <th scope="col">Hora</th> -->
            <th scope="col">Vincular aluno</th>
          </tr>
        </thead>
        <form method="post">
        <tbody>
          <?php foreach($materia as $matter) {
            $MatCad = SelecionaUmDado("SELECT * FROM aluno_materias WHERE idaluno = '".$_GET["id"]."' AND idmateria = ".$matter["id"]);
            ?>
          <tr>
            <td><?php echo $matter['nome_materia'] ?></td>
            <td>
              <label class="check">
                <input <?php if($MatCad){ print("checked"); } ?> type="checkbox" name="<?php print($matter["id"])?>">
                <span class="checkmark"></span>
              </label>
            </td>
          </tr>
        <?php }?>
        </tbody>
      </table>
      <input class="btn btn-info cadastrar" style="margin: 0 20px 20px 0; float:right;" type="submit" value="Cadastrar"/>
    </form>
    </div>
      <div class="popup-container" id="popup-cadastro">
        <div class="popup">
          <button class="cbtn-close" id="ibtn-close">X</button>
            <h3 class="h3popup">Cadastro realizado!</h3>
        </div>
      </div>
    <?php
    if($_POST){
      ?>
      <script type="text/javascript" src="js/script.js"></script>
      <script>
        iniciapopup('popup-cadastro');
      </script>
      <?php
    }
    ?>
