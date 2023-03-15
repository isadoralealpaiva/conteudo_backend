<h2> Matriz </h2>
<p>
    São estruturas de dados bidimensional,
    onde é necessário informar 2 indices para 
    realizar o acesso de um valor.
</p>
<p>
    Na prática consiste um vetor que armazena
    outros vetores.
</p>

<?php
    $produto1=[
        "nome" => "Câmera",
        "marca" => "LG",
        "preco" => 2500
     ];
      $produto2=[
        "nome" => "Notebook",
        "marca" => "Dell",
        "preco" => 7500
     ];
      $produto3=[
        "nome" => "Smartphone",
        "marca" => "Samsung",
        "preco" => 3500
     ];
     
     $produtos= [
        $produto1,
        $produto2, 
        $produto3
     ];

     for($i=0; $i<=2; $i++){
        foreach ($produtos[$i] as $key => $value) {
            echo $value. "<br>";
        }
     }

     echo "<table border=1>";
    //Outra forma 
    foreach($produtos as $produto){
        echo "<tr>";
        echo "<td>". $produto ["nome" ] . "<br>";
        echo "<td>". $produto ["marca"] . "<br>";
        echo "<td>". $produto ["preco"] . "<br>";
        echo "</tr>";
        }
        echo "</table>";

    
   


     
    

