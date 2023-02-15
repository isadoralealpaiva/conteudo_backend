<h2> operadores lógicos </h2>

<ol>
    <li>and - E</li>
    <li>or- Ou</li>
    <li>xor- Ou exclusivo</li>
    <li>!- Não</li>
    <li>||- OU</li>
</ol>


<?php
 $media= 6; 
 $faltas= 20;
 $criterio=$media>6;//false
 $criterio2=$faltas<25;//true
 $resultado=$criterio && $criterio2;//false
 var_dump ($resultado);

 ?>