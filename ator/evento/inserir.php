<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   if(isset($_POST['nome']) && isset($_POST['nascimento']) && isset($_POST['signo']) && isset($_POST['sexo'])){

   $nome = $_POST['nome'];
   $nascimento = $_POST['nascimento'];
   $signo = $_POST['signo'];
   $sexo = $_POST['sexo'];

   //cria uma variável com um comando SQL
   $SQL = "INSERT INTO `ator` (`nome`, `nascimento`, `signo`, `sexo`) VALUES (?, ?, ?, ?);";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?, ?
   $comando->bind_param("siss", $nome, $nascimento, $signo, $sexo);

   //executa o comando
   $comando->execute();
   
   }

   //volta para o formulário
   header("Location: index.php");

   







