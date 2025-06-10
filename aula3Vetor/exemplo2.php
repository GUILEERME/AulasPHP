<?php

echo "Vetor associativo  <br> ";
//VETOR COM ÍNDICE TEXTUAL
$dados = array (
    "nome " = > "Carlos" ,
    "idade" = > 25 ,
    "olhos " = > "verdes" ,
    "peso " = > 60 );
)

echo $dados[ "nome "] . " tem " . $dados[" idade "] . "anos ";

foreach ($dados as $valor) {
    echo " $valor <br>";
}

?>