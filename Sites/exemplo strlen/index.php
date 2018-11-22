<html>
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <center>
        <a href="index.html" class="btn">Exemplo Javascript</a>
        <form method = "post">
            <input type="text" name="string" placeholder="String">
            <input type="submit" value="Teste" name="ok">
            <input type="text" name="email" placeholder="Email">
        </form>
        <?php 
            if(isset($_POST["ok"])){
                echo "O tamanho da string é de: " . strlen($_POST["string"]) . " caracteres.";

                $email = $_POST["email"];
                $tamanho = strlen($email);

                echo "<br>".str_pad($email, $tamanho+1,"@");

            }

            // echo str_repeat("limao <br>", 3000);
            
            // $a = "babc";
            // $b = "d";
            // echo strpos($a, $b);  

            // $a = "A";
            // echo strtolower($a);
           

        ?>
    </center>
</html>
