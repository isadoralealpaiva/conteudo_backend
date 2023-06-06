<?php

//Inicia a sessão- deve ser colocado sempre
//antes de manipular a variavel $_SESSION
session_start();

//Verifica se existe uma variavel chamada
//$_SESSION com a key usuario,essa variavel
//é criada no arquivo validar.php quando o 
//usuario digita o login e a senha corretamente.
if(!isset($_SESSION['usuario'])){
    header("Location:../login/formulario.php");

}
    