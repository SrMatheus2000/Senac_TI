<?php
// include("libsql.php");
$alunos = SelecionaDiversosDados("SELECT * FROM alunos");

if (isset($_GET["v_materia"])) include("include/vincular_materia.php");
?>


  <style>
  html, body {
    height: 100%;
  }
  </style>

    <div class="container" >
      <h2 align="center" style="padding-top:20px; padding-bottom:20px;">Escolha o aluno</h2>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nº</th>
            <th scope="col">Nome</th>
            <th scope="col">Vincular com matéria</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach($alunos as $student) {?>
          <tr>
            <td scope="row"><?php echo $student['id'] ?></td>
            <td><?php echo $student['nome'] ?></td>
            <!-- <td><a style="color:#4e96b7;" href="vincular_materia.php?id=">Vincular</a></td> -->
            <form method="get">
              <td> <input class="btn" type="submit" name="v_materia" value="Vincular"> </td>
              <input type="hidden" name="pagina_professor">
              <input type="hidden" name="vincularmateria">
              <input type="hidden" name="id" value="<?php echo $student['id'] ?>">
            </form>

          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
