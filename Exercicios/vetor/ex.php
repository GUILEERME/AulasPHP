<?php

$numeros = array( 0 , 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9);
$i = 0;

echo " a) Exibir números armazenados no vetor <br>";

foreach ($numeros as $num) {
    echo "$num <br>";
}

echo "<br> <hr> <br>";

echo " b) ";

$maior = 0;
for($i = 0; $i <=9; $i++)
{
    if ($numeros[$i] > $maior ) {
    $maior =  $numeros[$i]; 
    }
}
echo $maior;

echo "<br> <hr> <br>";

echo " c) ";
$t = count($numeros);
$soma = 0;
for($i = 0; $i < $t; $i++) {
    $soma += $numeros[$i];
}
$media = $soma /10;
echo " Soma = " . $soma . "<br>" . " Média = " . $media;


echo "<br> <hr> <br>";

echo " d) <br> ";

    foreach($numeros as $num){
        sort($numeros);
        echo $num . "<br>";
    }

echo "<br> <hr> <br>";
echo " e) <br> ";

rsort($numeros);
foreach($numeros as $num){
    
    echo $num . "<br>";
}

echo " 2) ";

$vetor1 = array( 0 , 1 , 2 , 3 , 4 , 5);
$vetor2 = array( 5, 4 , 3 , 2 , 1 ,0);

$multiplicacao = array($num1);
for ($i = 0; $i < count($num1); $i++) {
    $mult[$i] = $num[$i] + $num2[$i];
}

echo "Multiplicação:"


echo "<br> <hr> <br>";

echo " 3) ";
echo "<br> Números pares: ";



?>