<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //verifica se foi enviada o param id pela URL
   if (isset($_GET['codigo'])){
   $codigo = $_GET['codigo'];

   //cria uma variável com um comando SQL
   $SQL = "SELECT * FROM `ator` WHERE `codigo`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //diz qual valor vai ser colocado no lugar do ?
   $comando->bind_param("i", $codigo);

   //executa o comando
   $comando->execute();

   //pegar os resultados da consulta - todas as linhas de resultados
   $resultados = $comando->get_result();
   
   //pega a primeira linha de resultado da consulta
   $ator = $resultados->fetch_object();
   }





