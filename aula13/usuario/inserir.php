<?php

//Importa o arquivo de conexão
require_once "../conexao.php";

//pegar os valores enviados do formulario
$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];


//Cria uma variavel com o comando SQL
$SQL = "INSERT INTO `usuario` (`nome`, `login`, `senha`) VALUES ('$nome', '$login', '$senha');";

echo $SQL;

//Prepara o comando para ser executado no mysql
$comando = $conexao->prepare($SQL);

//Executa  comando
$comando->execute();

