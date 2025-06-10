<?php

echo "<h1> Exemplo Funções </h1>";
echo"<br>";
echo " Função sem parâmetro e sem retorno";

function imprimirMensagem() {
    echo " <h1> OLHA O EASTER EGG DA BAND MULEKE </h1>";
    echo "<br>";
    echo " - Eu tô diante do Oruam ou do Mauro? An do Oruam";
}

imprimirMensagem(); // Chama a função

echo "<br> <hr> <br>";

echo "<h2> Função com parâmetro e sem retorno ";

echo "<br> ";

function imprimirMensagem2($nome)
{
    echo " oi $nome";
}

imprimirMensagem2(" João Pedro ");

echo "<br> <hr> <br>";




function calculaIdade($nome, $anoAtual, $anoNasc, $futuro ) 
{
    $idade = $anoAtual - $anoNasc;
    echo " $nome tem $idade anos";
    echo "<br>";
    echo "Sua idade no futuro";
    echo "<br> <br>";
    $idadeFutura = $idade + $futuro;
    echo "Em 2037 $nome terá $idadeFutura anos e vai ter um chip do Elon Musk implantado no rabo  ";
    
}

calculaIdade(" Benicio " , 2025, 2009, 12);

echo "<br> <hr> <br>";

echo "<h2> Função com retorno e sem passagem de parâmetro";

function calculaIdade2() {
    $anoNasc = 2000;
    $anoAtual = 2025;
    $idade = $anoAtual - $anoNasc;
    return "  A idade é $idade anos";
}
echo calculaIdade2();

echo "<br> <hr> <br>";
echo "<h2> Função com parâmetro e sem retorno </h2>";

function calculaIdade3($anoAtual, $anoNasc)
{
    $idade = $anoAtual - $anoNasc;
    return " A idade é $idade anos ";
}
echo calculaIdade3(2025 , 2009);
echo "<br> <hr> <br>";

echo " <h2> Função com retorno e parâmetro";

function calculaIdade4($anoAtual, $anoNasc) 
{
    $idade = $anoAtual - $anoNasc;
    return $idade;
}
$i = calculaIdade4(2025, 2009);
echo " Você tem $i anos";

?>