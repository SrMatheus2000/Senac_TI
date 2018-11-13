<form method="post">
    <input type="hidden" name="menu" value="inicio">
    <input type="text" name="dado1" placeholder="Dado 1"><br>
    <input type="text" name="dado2" placeholder="Dado 2"><br>
    <input type="text" name="dado3" placeholder="Dado 3"><br>
    <input type="text" name="dado4" placeholder="Dado 4"><br>
    <input type="text" name="dado5" placeholder="Dado 5"><br>
    <input type="submit" name="enviar" value="Enviar">
</form>

<?php
    if (isset($_POST["enviar"])) {
        executasql(
            "INSERT INTO `json` (
                dado1, 
                dado2, 
                dado3, 
                dado4, 
                dado5
            ) VALUES(
                '".$_POST["dado1"]."',
                '".$_POST["dado2"]."',
                '".$_POST["dado3"]."',
                '".$_POST["dado4"]."',
                '".$_POST["dado5"]."'
            )"
        );
    }
?>