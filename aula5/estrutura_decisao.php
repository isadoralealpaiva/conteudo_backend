<h2> Estrutura de decisão </h2>
<p>
As estruturas de condição permitem executar
blocos distintos de código dado uma condição.Exemplo

<strong> Exemplo </strong>
<pre>
    if (condicao)
    // instruções executadas
    // caso a condição seja verdadeira
}else{
    // instruçoes executadas,caso 
    // a condição seja falsa.
}
</pre>
</p>
<?php 
$media = 7;

if ($media>=6){
    echo "O aluno foi aprovado";
}else{
    echo "O aluno foi reprovado";
}
?>
<p>
----------------------------------
10<media >=6 |aprovado
6<media >=3  |exame
 media < 3   |reprovado 
</p>

<?php
$media = 4;

if ($media>=6){
    echo "O aluno foi aprovado";
}else if ($media>=3){
    echo "O aluno ficou de recuperação";
}else{
    echo "O aluno foi reprovado";
}
?> 
<p> O PHP faz a conversão automatica de alguns tipos
    para verdadeiro ou falso.

    <strong>True </strong>
    <ul>
        <li>string com texto</li>
        <li>Número maior que 0</li>
        <li>Vetor com elementos</li>
    </ul>

    <strong>False </strong>
    <ul>
        <li>string vazia</li>
        <li>Número igaul a 0</li>
        <li>Vetor vazinho</li>
    </ul>
    </p>
<?php

if("o loco meu!"){
    echo "verdadeiro";

    }else{
        echo "falso";
    }
    ?>

}
<?php
    $media = 4;
    if($media >=6 || "Quero passar de ano"){
        echo "Huhuhu, sou esperto";
    }else{
        echo "ihh, me dei mal";
    }





