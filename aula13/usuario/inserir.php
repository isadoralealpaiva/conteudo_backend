<?php

//Importa o arquivo de conexão
require_once "../conexao.php";

//Cria uma variavel com o comando SQL
$SQL = "INSERT INTO `usuario` (`nome`, `login`, `senha`) VALUES ('Isadora Leal', 'admin123', '123');";

//Prepara o comando para ser executado no mysql
$comando = $conexao->prepare($SQL);

//Executa  comando
$comando->execute();

