<?php
    require_once "../template/cabecalho.php";
    require_once "../template/menu_restrito.php";

?>
<div class="container">

    <h1>Área Restrita </h1>
    <hr>

    <form action="validar.php"  method="post" enctype="multipart/form-data">
        

        <label class="form-label">Login</label><br>
        <input type="text" name="login" class="form-control"><br>

        <label class="form-label">Senha</label><br>
        <input type="password" name="senha" class="form-control" ><br> 

        <button type="submit" class="btn btn-success">Entrar</button>
        
    </form>
    
    </div>
    
    <?php require_once "../template/rodape.php";?>