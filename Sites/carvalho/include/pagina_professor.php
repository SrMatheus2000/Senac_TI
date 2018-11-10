<div class="container">
    <div class="box">
        <div class="form-inline">
            <form method="post" style="margin-right: 5px;">
                <input class="btn btn-info" type="submit" name="deslogar" value="Sair">
            </form>
            <form method="get">
                <input type="hidden" name="pagina_professor">
                <input class="btn" type="submit" name="materias" value="Matérias" />
                <input class="btn" type="submit" name="gestor_alunos" value="Alunos" />
                <input class="btn" type="submit" name="cadastro_alunos" value="Cadastro de Alunos" />
            </form>
        </div>
        <?php
            if(!$_GET || isset($_GET["materias"])) includee("materias");
            elseif (isset($_GET["nova_materia"])) includee("nova_materia");
            elseif (isset($_GET["aulas"])) includee("aulas");
            elseif (isset($_GET["nova_aula"]) || isset($_GET["editar_aula"])) includee("nova_aula");
            elseif (isset($_GET["cadastro_alunos"])) includee("cadastro_alunos");
            elseif (isset($_GET["gestor_alunos"])) includee("gestor_alunos");
            elseif (isset($_GET["vincularmateria"])) include("vincular_materia.php");

         ?>
    </div>
</div>
