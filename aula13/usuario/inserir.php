<?php

//Importa o arquivo de conexão
require_once "../conexao.php";


if(isset($_POST['nome']) && isset($_POST['login']) && isset ($_POST['senha'])){
    $nome = $_POST["nome"];
    $login = $_POST["login"];
    $senha = password_hash ($_POST["senha"], PASSWORD_BCRYPT);


    //Cria uma variavel com o comando SQL
    $SQL = "INSERT INTO `usuario` (`nome`, `login`, `senha`) VALUES ('$nome', '$login', '$senha');";

    echo $SQL;

    //Prepara o comando para ser executado no mysql
    $comando = $conexao->prepare($SQL);

    //Faz a vinculação dos parametros ?,?,?
    $comando->bind_param("sss", $nome, $login,$senha);

    //Executa  comando
    $comando->execute();


 }
 //Volta para o formulario
 header("Location: ../form_usuario.php");

