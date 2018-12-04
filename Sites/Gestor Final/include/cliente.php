<center>
    <form method="post">
        <input type="text" name="nome" id="nome" placeholder="Nome"><br>
        <input type="text" name="email" id="email" placeholder="Email"><br>
        <input type="text" name="cnpj" id="cnpj" placeholder="CNPJ"><br>
        <input type="text" name="endereco" id="endereco" placeholder="Endereço"><br>
        <input type="text" name="telefone" id="telefone" placeholder="Telefone"><br>
        <input type="text" name="site" id="site" placeholder="Site"><br>
        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>
</center>

<?php
    if (isset($_POST["cadastrar"])) {
        executasql(
            "INSERT INTO `cliente` (
                `nome`, 
                `email`, 
                `cnpj`, 
                `endereco`, 
                `telefone`, 
                `site`
            ) VALUES (
                '".$_POST["nome"]."', 
                '".$_POST["email"]."', 
                '".$_POST["cnpj"]."', 
                '".$_POST["endereco"]."', 
                '".$_POST["telefone"]."', 
                '".$_POST["site"]."'
            );"
        );
    }
?>