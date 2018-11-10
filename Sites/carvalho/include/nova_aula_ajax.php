<?php

	include 'libsql.php';
	session_start ();

    // var_dump($_POST);
    // var_dump($_FILES);
	// if (isset($_GET["nova_aula"])) {
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
	// }
	// elseif (isset($_GET["editar_aula"])) {
	// 	executasql (
	// 		"UPDATE `cad_aula`
	// 		SET
	// 			nome_aula = '".$_POST["nome_aula"]."',
	// 			descricao = '".$_POST["descricao"]."',
	// 			data = '".$_POST["data_aula"]." ".$_POST["hora_aula"].":00'
	// 		WHERE id = ".$aula["id"]
	// 	);
	// }

	// "UPDATE `cad_aula`
	// SET arquivo = '".$comprovante["name"]."'
	// WHERE id =  ".$aula["id"]

    // session_start ();
		$aula = selecionaumdado(
        "SELECT *
        FROM `cad_aula`
        WHERE nome_aula ='".$_POST["nome_aula"]."'"
    );
    $comprovante = $_FILES["arquivo"];
    $pasta = "../arquivos_aula/";
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
 ?>
