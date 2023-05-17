<?php


//Local temporario onde foi realizado o upload da imagem
$origem=$_FILES['foto'] ['tmp_name'];

//Cria um novo nome para a foto
$nome_foto= time().$_FILES['foto']['name'];

//Local para onde o arquivo de upload vai ser movido
$destino="../uploads/$nome_foto";

//Move o arquivo de upload para a pasta de destino
move_uploaded_file($origem, $destino);





