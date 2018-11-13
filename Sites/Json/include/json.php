<?php
    if (!function_exists('conectarbanco')) {
        include "libsql.php";
    }

    $dados = selecionadiversosdados(
        "SELECT * FROM `json`"
    );
    $dados_json = [];
    foreach ($dados as $dado) {
        array_push($dados_json, $dado);
    }
    echo(json_encode($dados_json));
?>