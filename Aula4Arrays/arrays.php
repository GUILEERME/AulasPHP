<?php

$cidades = array(" Guaratinguetá " , "  Xique-Xique " , " Belo Horizonte " , " Cuiabá " , "Rio Branco " );

foreach($cidades as $cid) {
    echo $cid . "<br>";
}

// Conta o número de elementos no Array
echo " Nº de elementos no vetor: " . count(value: $cidades);

echo "<br> <hr> <br>";

// Obtem elementos de forma aleatória
$indice = array_rand(array: $cidades);
echo " Cidade sorteada: " . $cidades[$indice];

//Ordena os elementos do vetor
echo " Vetor em ordem alfabética <br> ";
sort( $cidades);
print_r( $cidades);

echo "<br> <hr> <br>";

// ORDEM INVERSA
echo " Vetor em ordem inversa  <br>";
rsort($cidades);
print_r($cidades);

echo "<br> <hr> <br>";

// Unset: remove um elemento de um array
unset($cidades[3]);
echo " Remove a posição 3 do vetor <br>";
print_r( $cidades);

?>