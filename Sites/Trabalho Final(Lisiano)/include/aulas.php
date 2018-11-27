<?php
    if (isset($_POST["enviar_Arquivo"])) {
        $aula = selecionaumdado(
            "SELECT *
            FROM `cad_aula`
            WHERE id ='".$_POST["id"]."'"
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
                    alert("Arquivo enviado com sucesso!");
                </script><?php
            } else {
                ?><script type="text/javascript">
                    alert("Erro ao enviar arquivo!");
                </script><?php
            }
        } else {
            ?><script type="text/javascript">
                alert("Arquivo deve estar no formato .pdf ou .zip!");
            </script><?php
        }
    }
    $aulas = selecionadiversosdados(
        "SELECT *,
        DATE_FORMAT(
            DATE_SUB(
                data,
                INTERVAL 0 hour
            ),
            '%d/%m/%Y às %H:%i'
        )
        AS data_aula,
        `cad_aula`.id AS id_aula,
        `cad_materia`.id AS id_materia
        FROM `cad_aula`
        INNER JOIN `cad_materia`
        ON `cad_aula`.materia_pai = `cad_materia`.id
        WHERE `cad_aula`.materia_pai =" . $_GET["aulas"]
    );
    $nome_materia = selecionaumdado(
        "SELECT *
        FROM `cad_materia`
        WHERE id = ". $_GET["aulas"]
    );
?>
    <form method="get" style="float: right;">
        <input type="hidden" name="pagina_professor">
        <input
            type="hidden"
            name="aula"
            value="<?php echo $_GET["aulas"] ?>">
        <input
            class="btn"
            type="submit"
            name="nova_aula"
            value="Nova Aula" />
    </form>
<table class="table
      table-striped
      table-hover
      table-bordered" style="text-align: center;">
    <thead>
        <tr>
            <th colspan="4"><h2>Aulas de <?php echo $nome_materia["nome_materia"]; ?></h2></th>
        </tr>
        <tr>
            <th>Nome</th>
            <th>Data</th>
            <th>Arquivo (.pdf ou .zip)</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($aulas as $aula):?>
            <tr>
                <td><?php echo $aula["nome_aula"]?></td>
                <td><?php echo $aula["data_aula"]; ?></td>
                <td>
                    <form
                      method="post"
                      style="height: 25;"
                      enctype="multipart/form-data">
                      <?php
                          if ($aula["arquivo"] != 0){
                            ?>
                            <a
                              class="btn"
                              href="arquivos_aula/<?php echo ($aula["arquivo"]);?>"
                              target="_blank"
                              style="
                                -webkit-appearance: button;
                                background-color: rgb(221,221,221);
                                color: black;
                                margin: 0 0 -8 0;
                                padding: 5 10;
                                text-align: center;">
                              Visualizar Arquivo
                            </a>
                            <?php
                          } else {
                            ?>
                            <input
                              type="hidden"
                              name="id"
                              value="<?php echo($aula["id_aula"]); ?>">
                              <input
                                type="file"
                                name="arquivo"
                                class="btn"
                                style="
                                  width: 145px;
                                  margin: 0 5 -8 0;
                                  padding: 5 10;"/>
                            <input
                              type="submit"
                              class="btn"
                              name="enviar_Arquivo"
                              value="Enviar"
                              style="
                                margin: 0 0 -8 0;
                                padding: 5 10;
                                text-align: center;"/>
                            <?php
                          }
                      ?>
                      </form>
                </td>
                <td>
                    <form method="get">
                        <input type="hidden" name="pagina_professor">
                        <input type="hidden" name="materia" value="<?php echo $aula["id_materia"] ?>">
                        <input type="hidden" name="aula" value="<?php echo $aula["id_aula"] ?>">
                        <input class="btn" type="submit" name="editar_aula" value="Editar">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>