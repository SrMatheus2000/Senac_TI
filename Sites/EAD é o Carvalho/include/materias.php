<form method="get" style="float: right;">
  <input type="hidden" name="pagina_professor">
  <input class="btn" type="submit" name="nova_materia" value="Nova Matéria" />
</form>
<table class="table
  table-striped
  table-hover
  table-bordered" style="text-align: center;">
  <thead>
    <tr>
      <th colspan="2">
        <h2>Matérias</h2>
      </th>
    </tr>
  </thead>
  <tbody>
    <?php
      $materias = selecionadiversosdados("SELECT * FROM `cad_materia` WHERE prof_materia = '".$_SESSION["ID_professor"]."'" /*. $_SESSION["id"]*/);
      foreach ($materias as $materia):?>
        <tr>
            <td style="width: 80%;"><h4><?php echo $materia["nome_materia"] ?></h4></td>
            <td>
              <form method="get">
                  <input type="hidden" name="pagina_professor">
                  <input type="hidden" name="aulas" value="<?php echo $materia["id"] ?>">
                  <input class="btn" type="submit" value="Aulas" style="font-size: 18px;">
              </form>
            </td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>