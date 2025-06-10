<?php
//Variáveis
const nome = "Neymar";
$salarioFixo = 8259.99;
$vendasEfetuadas = 55;
//Cálculos
$comissao = $vendasEfetuadas * 0.05;
$salarioTotal = $salarioFixo + $comissao;
//Resultados
echo "Nome: " . nome . "<br>";
echo "Salário fixo =" . number_format($salarioFixo, 2, ',' , '.') . "<br>";
echo "Comissão = " . number_format($comissao, 2, ',' , '.') . "<br>";
echo "Salário total = " . number_format($salarioTotal, 2, ',' , '.') . "<br>";
?>