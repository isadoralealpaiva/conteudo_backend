<?php
    require_once "../template/cabecalho.php";
    require_once "consultar_por_id.php";
    require_once "../template/cabecalho.php";

?>
<div class="container">

    <h1>Cadastro de atores</h1>
    <hr>

    <form action="<?php echo isset ($ator) ? "atualizar.php" : "inserir.php";?>"

    method="post">
        
        <input type="hidden" name="codigo" value="<?php echo $ator->codigo ?? "";?>"><br>

        <label class="form-label">Nome</label><br>
        <input class="form-control" type="text" name="nome" value="<?php echo $ator->nome ?? "";?>"><br>

        <label class="form-label">Ano de Nascimento</label><br>
        <input class="form-control" type="number" name="nascimento" value="<?php echo $ator->nascimento ?? "";?>"><br>

        <label class="form-label">Signo</label><br>
        <input class="form-control" type="text" name="signo" value="<?php echo $ator->signo ?? "";?>"><br>

        <label class="form-label">Sexo</label><br>
        <select class="form-select" name="sexo">
            <option value="feminino" <?php echo isset($ator->sexo) ? $ator->sexo == "feminino" ? "selected" : "" : ""; ?>>Feminino</option>
            <option value="masculino"<?php echo isset($ator->sexo) ? $ator->sexo == "masculino" ? "selected" : "" : ""; ?>>Masculino</option>
            <option value="outro" <?php echo isset($ator->sexo) ? $ator->sexo == "outro" ? "selected" : "" : ""; ?>>Prefiro não dizer</option>
        </select>
        <br>
    
        <button class="btn btn-success" type="submit">Inserir</button>
        
    </form>
    
    </div>
    
    <?php require_once "../template/rodape.php";?>