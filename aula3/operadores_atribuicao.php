<p>
        São utilizados para armazenar 
        "atribuir valores a uma variavel"
</p>

<ol>
    <li>= | atribuição simples</li>
    <li>+=| acumula o novo valor</li>
    <li>-=| subtrai o valor da variavel</li>
    <li>++| incrementa 1 ao valor da variavel</li>
    <li>--| subtrai 1 do valor da variavel </li>
    <li>.=| concatena o texto ao valor da variavel </li>
</ol>

<strong>Exemplo</strong>
<?php
    $nota = 5; // Atribui o número 5 na variavel nota
    echo $nota; // imprime o número 5 

    $nota +=5; // Soma + 5 na variavel nota
    echo $nota; // imprime o numero 10 (5 de antes + 5 de agora)

    $nota-=2; // Equivalente a $nota=$nota - 2;
    echo $nota; // imprime o valor 8

    $nota++; // Soma 1 ao valor da variável,= $nota=$nota +1;
    echo $nota; //imprime o valor 9

    $nota--; // Soma 1 ao valor da variável,= $nota=$nota -1;
    echo $nota; //imprime o valor 8

    $nome = "Ivan";
    $nome .= "Pereira"; // concatena o valor anterior Ivan, com 
                       // o novo valor Pereira e armazena na 
                       // na variavel nome
    echo $nome; // Imprime Ivan Pereira 