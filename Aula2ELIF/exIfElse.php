<?php
echo "Estrutura de decisão";
echo "<br>";
echo "Exemplo comando if-else";
echo "<br>";

$hora = 8;
if ($hora <= 12) {
    echo "Bom dia!";
} else if ($hora <= 18) {
    echo "Boa tarde!";
}

echo "<br><hr><br>";

echo "Exemplo comando if e operadores: and(E) - or(OU)";
echo "<br>";
//Pode se usar também && (E) - Ou ||
$hora = 10;
if ($hora > 6 and $hora <= 12) {
    echo "Bom dia!";
} elseif ($hora > 12 and $hora <= 18) {
    echo "Boa tarde!";
} else if ($hora <= 18 and $hora <= 24){
    echo "Boa noite!";
} else {
    echo "Boa madrugada!";
}

echo "<br><hr><br>";

echo "Exemplo operadores ternários";
//Sintaxe: condição ? verdadeira : falsa

$idade = 18;
$mensagem = $idade >= 18? "Você é maior de idade" : "Você é menor de idade";
echo "<br><br>";
echo $mensagem;

echo "<br><hr><br>";

$preco = 50;
$preco >= 100 ?
$r = $preco + $preco * 10/100 :
$r = $preco + $preco * 5/100;
echo $r;

echo "<br><hr><br>";
echo "Estrutura switch case";
echo "<br><br>";
$periodo = "m";

switch ($periodo) {
    case "m":
        echo "Bom dia!";
        break;
    case "t":
        echo "Boa tarde!";
        break;
    case "n":
        echo "Boa noite!";
        break;
    default:
        echo "Boa madrugada!";
        break;
    
    
    
}
?>



