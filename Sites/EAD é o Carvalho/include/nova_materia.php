<div class="container">
    <div class="box">
<form method="get">
    <input type="hidden" name="materias">
    <input class="btn" type="submit" value="Voltar para Matérias" />
</form>
<center>
    <h2>Cadastrar nova Matéria</h2>
    <br>
    <form method="post">
        <input type="hidden" name="cad_materia" value="Nova+Matéria">
        <input type="text" class="form-control" name="nome_materia" placeholder="Nome da Matéria" style="width: 300px;">
        <br>
        <input class="btn" type="submit" name="cadastra_materia" value="Cadastrar Nova Matéria">
    </form>
</center>
  </div>
</div>
<?php
    if (isset($_POST["cadastra_materia"])) {
        executasql(
            "INSERT INTO `cad_materia` (
                nome_materia,
                prof_materia
            ) VALUES (
                '".$_POST["nome_materia"]."',
                '".$_SESSION["ID_professor"]."'
            )"
        );
    }
?>