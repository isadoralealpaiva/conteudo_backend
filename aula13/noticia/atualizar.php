<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";
   require_once "../login/controlar_acesso.php";

   $id = $_POST['idnoticia'];
   $nome = $_POST['titulo'];
   $login = $_POST['materia'];
   $senha =$_POST['categoria'];

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `noticia` SET `titulo`= ?, `materia`= ?, `categoria`= ? WHERE  `idnoticia`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("sssi", $titulo, $materia, $categoria, $id);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");

   







