<?php
    //Chama a url da previsão do tempo
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt(
        $ch, 
        CURLOPT_URL,
        "http://localhost/json/include/json.php"
    );
    $result=curl_exec($ch);
    curl_close($ch);
    //Fim chamada

    //Converte para array
    $recebe = json_decode($result, true);

    // var_dump($recebe);

    for($i = 0; $i < count($recebe); $i++){
        echo "Dados ".$i."<br>";
        echo $recebe[$i]["dado1"]."<br>";
        echo $recebe[$i]["dado2"]."<br>";
        echo $recebe[$i]["dado3"]."<br>";
        echo $recebe[$i]["dado4"]."<br>";
        echo $recebe[$i]["dado5"]."<br>";
    }

    foreach ($recebe as $dados) {
        echo "Dados ".$dados["id"]."<br>";
        echo $dados["dado1"]."<br>";
        echo $dados["dado2"]."<br>";
        echo $dados["dado3"]."<br>";
        echo $dados["dado4"]."<br>";
        echo $dados["dado5"]."<br>";
    }
?>

