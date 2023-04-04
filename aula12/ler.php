<?php include_once "dados.php";?>
<?php include_once "header.php"; ?>
<?php include_once "menu.php"; ?>

<?php
$id = $_GET["id"];
$noticia = $noticia[0];

?>
 
<div class="container">
    <h1><?php echo $noticia['titulo']; ?></h1>
    <hr>
    <img src="<?php echo $noticia['foto']; ?>" class="" />
    <p><? echo $noticia['materia']; ?></p>
   
</div>





<?php include_once "rodape.php"; ?>
