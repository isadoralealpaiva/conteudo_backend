<?php

$host = "127.0.0.1";
$user = "root";
$password ="";
$database = "db_catalogo_3infob";
$port = 3306;


//cria uma conecão com o mysql
$conexao = new mysqli ($host,
                       $user,
                       $password,
                       $database,
                       $port);
//Vetifica se existe erros na conexão
if($conexao->connect_error){
    echo $coneexao->connect_error;
    die();
}