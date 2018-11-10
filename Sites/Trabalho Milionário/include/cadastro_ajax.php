<?php
    include("libsql.php");
    $nome          = $_POST["nome"];
    $sobrenome     = $_POST["sobrenome"];
    $cpf           = $_POST["cpf"];
    $rg            = $_POST["rg"];
    $nacionalidade = $_POST["nacionalidade"];
    $nascimento    = $_POST["nascimento"];
    $civil         = $_POST["civil"];
    $input_sexo    = $_POST["input_sexo"];
    $estado        = $_POST["estado"];
    $rua           = $_POST["rua"];
    $numero        = $_POST["numero"];
    $bairro        = $_POST["bairro"];
    $municipio     = $_POST["municipio"];
    $cep           = $_POST["cep"];
    $telefone1     = $_POST["telefone1"];
    $telefone2     = $_POST["telefone2"];
    $email         = $_POST["email"];
    $senha         = $_POST["senha"];
    $senha2        = $_POST["senha2"];

    $data = explode("-", $nascimento);
    $dia  = $data[2];
    $mes  = $data[1];
    $ano  = $data[0];

    executasql(
        "INSERT INTO `cadastro_pessoa` (
            nome,
            sobrenome,
            CPF,
            RG,
            nacionalidade,
            nascimento,
            estado_civil,
            sexo,
            estado,
            rua,
            numero,
            bairro,
            municipio,
            CEP,
            telefone1,
            telefone2,
            email,
            senha,
            data_cadastro
        ) VALUES (
            '".$nome."',
            '".$sobrenome."',
            '".$cpf."',
            '".$rg."',
            '".$nacionalidade."',
            '".$nascimento."',
            '".$civil."',
            '".$input_sexo."',
            '".$estado."',
            '".$rua."',
            '".$numero."',
            '".$bairro."',
            '".$municipio."',
            '".$cep."',
            '".$telefone1."',
            '".$telefone2."',
            '".$email."',
            '".$senha."',
            now()
        );"
    );

    $usuario = selecionaumdado(
      "SELECT *
      FROM `cadastro_pessoa`
      WHERE email = '".$email."'"
    );

    session_start();

    $_SESSION["id"]    = $usuario["id"];
    $_SESSION["email"] = $email;
    $_SESSION["nome"]  = $nome;
    $_SESSION["senha"] = $senha;

?>



<!---->
