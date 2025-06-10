<?php

// Função sem parâmetro e sem retorno

function calcularVolume() {
    $altura = 5;
    $largura = 9;
    $comprimento = 10;
    $volume = $altura * $largura * $comprimento;
    echo " Volume da caixa =  $volume " . "m³";
}
calcularVolume();

echo "<br> <hr> <br>";

// Função com parâmetro e sem retorno

function calcularComissao($vendasEfetuadas) {

    $comissao = $vendasEfetuadas * 0.05;
    echo " Sua comissão é de R$$comissao";
}
calcularComissao(2000);

echo "<br> <hr> <br>";

// Função sem parâmetro e com retorno

function somarQuadrados() 
{
$num1 = 10;
$num2 = 20;
$num3 = 30;

$quadradoNum1 = $num1 * $num2;
$quadradoNum2 = $num2 * $num2;
$quadradoNum3 = $num3 * $num3;

$soma = $quadradoNum1 + $quadradoNum2 + $quadradoNum3;

return $quadradoNum1;
return $quadradoNum2;
return $quadradoNum3;

return $soma;
}
echo somarQuadrados();

echo "<br> <hr> <br>";

// Função com parâmetro e retorno

function calcularMulta($velocidadeAtual , $velocidadePermitida)
{
    $diferenca = $velocidadeAtual - $velocidadePermitida;

if ($diferenca > 0 && $diferenca <= 10) {
    $multa = 50;
} elseif ($diferenca >= 11 && $diferenca <= 30) {
    $multa = 100;
} elseif ($diferenca >= 31) {
    $multa = 200;
}

return $multa;
}
echo "Sua multa é de" . " R$" . calcularMulta( 1000, 90) ;

?>