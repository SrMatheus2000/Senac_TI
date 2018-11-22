<html>
    <center>
        <form method="post">
            <p>Texto</p>
            <textarea name="texto" cols="30" rows="10"></textarea>
            <br>
            <input type="radio" name="case" id="mai" value="mai">
            <label for="mai">Maiusculo</label>
            <input type="radio" name="case" id="min" value="min">
            <label for="min">Minusculo</label>
            <br>
            <input type="text" name="local" placeholder="Localizar">
            <input type="submit" name="ok" value="Ok">
        </form>
    </center>
</html>

<?php
    if (isset($_POST["ok"])) {
        $texto = $_POST["texto"];
        $case  = $_POST["case"];
        $achar = $_POST["local"];
      
        $palavra = "<text style='background:yellow;'>".$achar."</text>";

        $textofinal = str_replace($achar,$palavra,$texto);
    
        if ($case=="mai") $textofinal = strtoupper($textofinal);
        else              $textofinal = strtolower($textofinal);
                
        echo "<center>" . $textofinal . "<br>" . "O texto tem " . strlen($texto) . " caracteres.</center>";
    }
?>