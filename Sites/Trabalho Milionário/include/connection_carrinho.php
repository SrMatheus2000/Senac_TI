<?php

//Dados do banco de dados
define("DB_HOST", "localhost");
define("DB_NAME", "u821233505_urex");
define("DB_USER", "u821233505_urex");
define("DB_PASS", "trabalhomilionario");

//Conexao com Banco de Dados
return new PDO(sprintf("mysql:host=%s;dbname=%s", DB_HOST, DB_NAME), DB_USER, DB_PASS);
