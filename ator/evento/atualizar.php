<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $codigo = $_POST['codigo'];
   $nome = $_POST['nome'];
   $nascimento = $_POST['nascimento'];
   $signo = $_POST['signo'];
   $sexo = $_POST['sexo'];
  

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `ator` SET `nome`= ?, `nascimento`= ?, `signo`= ?, `sexo` = ? WHERE  `codigo`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("sissi", $nome, $nascimento, $signo, $sexo, $codigo);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");

   







