<?php
    if (isset($_POST["edita_aula"])) {
        executasql(
            "UPDATE `cad_aula`
            SET
            nome_aula = '".$_POST["nome_aula"]."',
            descricao = '".$_POST["descricao"]."',
            data = '".$_POST["data_aula"]." ".$_POST["hora_aula"]."',
            link_video = '".$_POST["link_video"]."'
            WHERE id =" . $_GET["aula"]
        );
    }
    $nome_materia = selecionaumdado(
        "SELECT *
        FROM `cad_materia`
        WHERE id = ". $_GET["aula"]
    );
    if (isset($_GET["materia"])) {
        $nome_aula = selecionaumdado(
            "SELECT *
            FROM `cad_aula`
            WHERE id = ". $_GET["aula"]
        );
        $data = explode(" ", $nome_aula["data"]);
        $data_aula = $data["0"];
        $hora_aula = $data["1"];
    }
?>
<form method="get">
    <input type="hidden" name="pagina_professor">
    <?php
        if (isset($_GET["nova_aula"])) {
            ?><input type="hidden" name="aulas" value="<?php echo $_GET["aula"]; ?>"><?php
        } else {
            ?><input type="hidden" name="aulas" value="<?php echo $_GET["materia"]; ?>"><?php
        }
     ?>
    <input class="btn" type="submit" value="Voltar para Aulas" style="font-size: 18px;">
</form>
<center>
    <h2>
        <?php
            if (isset($_GET["nova_aula"])) echo "Cadastrar nova Aula";
            else echo "Editar Aula";
        ?>
    </h3>
    <br>
    <form method="post" id="form" enctype="multipart/form-data" onsubmit="return checa_aula()">
        <input
            type="hidden"
            name="cad_aula"
            value="Nova+Aula">
        <input
            type="hidden"
            name="aula"
            value="<?php  echo $_GET["aula"];?>">
        <input
            type="text"
            name="nome_aula"
            id="nome_aula"
            placeholder="Nome da Aula"
            class="form-control"
            style="width: 300px;"
            value="<?php if (isset($_GET["materia"])) echo $nome_aula["nome_aula"] ?>">
        <br>
        <p id="idNome"> </p>
        <label for="descricao">Descrição da Aula:</label><br>
        <textarea
            rows="10"
            cols="50"
            type="text"
            id="descricao_aula"
            name="descricao"
            class="form-control"
            style="width: 450px;"
            maxlength="500"><?php if (isset($_GET["materia"])) echo $nome_aula["descricao"] ?></textarea>
        <br>
        <p id="idDescricao"> </p>
        <label for="data_aula">Data da Aula</label>
        <input
            type="date"
            id="data_aula"
            name="data_aula"
            class="form-control"
            style="width: 200px;"
            value="<?php if (isset($_GET["materia"])) echo $data_aula ?>">
        <br>
        <p id="idData"> </p>
        <label for="hora">Hora da Aula</label>
        <input
            type="time"
            id="hora_aula"
            name="hora_aula"
            class="form-control"
            style="width: 100px;"
            value="<?php if (isset($_GET["materia"])) echo $hora_aula ?>">
        <br>
        <p id="idHora"> </p>
        <label for="hora">Link para video para a Aula</label>
        <input
            type="url"
            id="link_video"
            name="link_video"
            class="form-control"
            style="width: 200px;"
            value="<?php if (isset($_GET["materia"])) echo $nome_aula["link_video"] ?>">
        <br>
        <input
            type="hidden"
            name="id"
            value="<?php echo($nome_materia["id"]); ?>">
        <label for="arquivo">Arquivo da Aula (.pdf ou .zip)</label>
        <br>
        <?php if (isset($_GET["materia"])): ?>
          <a
          class="btn"
          href="arquivos_aula/<?php echo ($nome_aula["arquivo"]);?>"
          target="_blank"
          style="
          -webkit-appearance: button;
          background-color: rgb(221,221,221);
          color: black;
          margin: 0 0 -8 0;
          padding: 5 10;
          text-align: center;"
          id="visualizar">
          Visualizar Arquivo
        </a>
      <?php endif; ?>
          <input
            type="file"
            id="arquivo_aula"
            name="arquivo"
            style="width: 136px;"/>
        <br>
        <p id="idArquivo"> </p>
        <input
            class="btn"
            type="submit"
            id="<?php if (isset($_GET['nova_aula'])) echo 'cadastra_aula'; else echo 'edita_aula';?>"
            name="<?php if (isset($_GET['nova_aula'])) echo 'cadastra_aula'; else echo 'edita_aula';?>"
            value="<?php if (isset($_GET['nova_aula'])) echo 'Cadastrar nova Aula'; else echo 'Salvar Edições';?>"/>
    </form>
    <p id="resultado"></p>
</center>
<?php
    if (
        isset($_POST["cadastra_aula"])
        // &&
        // isset($_POST["nome_aula"]) != "" &&
        // isset($_POST["descricao_aula"]) != "" &&
        // isset($_POST["data_aula"]) != "" &&
        // isset($_POST["hora_aula"]) != ""
    ) {
        executasql (
            "INSERT INTO `cad_aula`(
                nome_aula,
                descricao,
                prof_aula,
                data,
                materia_pai
            ) VALUES(
                '".$_POST["nome_aula"]."',
                '".$_POST["descricao"]."',
                '".$_SESSION["ID_professor"]."',
                '".$_POST["data_aula"]." ".$_POST["hora_aula"].":00',
                '".$_POST["aula"]."'
            );"
        );
    }
    if (
        isset($_POST["cadastra_aula"]) || (
            isset($_POST["edita_aula"]) && 
            $_FILES["arquivo"]["name"] != ""
        )
    ) {
        $aula = selecionaumdado(
            "SELECT *
            FROM `cad_aula`
            WHERE nome_aula ='".$_POST["nome_aula"]."'"
        );
        $comprovante = $_FILES["arquivo"];
        $pasta = "arquivos_aula/";
        $extencao = strtolower (
            pathinfo (
                $comprovante["name"],
                PATHINFO_EXTENSION
            )
        );
        $comprovante["name"] = $aula["id"].".".$extencao;
        if ($extencao == "pdf" || $extencao == "zip") {
            if (
                move_uploaded_file (
                    $comprovante["tmp_name"],
                    $pasta.$comprovante["name"]
                )
            ) {
                executasql (
                    "UPDATE `cad_aula`
                    SET arquivo = '".$comprovante["name"]."'
                    WHERE id =  ".$aula["id"]
                );
            ?><script type="text/javascript">
                document.getElementById('resultado').innerHTML = "Arquivo enviado com sucesso!";
            </script><?php
            } else {
            ?><script type="text/javascript">
                document.getElementById('resultado').innerHTML = "Erro ao enviar arquivo!";
            </script><?php
            }
        } else {
        ?><script type="text/javascript">
            document.getElementById('resultado').innerHTML = "Arquivo deve estar no formato .pdf ou .zip!";
        </script><?php
        }
    }
?>