<?php
const funcionario = "Paulo";
$salario = 2000.00;
$aumento = 10;

//calcular aumento de 10% sobre o salario
$valor_aumento = $salario * $aumento/100;
$total = $salario + $valor_aumento;

echo "Funcionário:" . funcionario . "<br>";
//Parâmetros : variável, n de casas decimais, separador decimal, separador de milhar

echo "Salário inicial: " . number_format($salario, 2, ',', '.') . "<br>";
echo "Aumento: " . number_format($aumento, 2, ',', '.') . "%<br>";
echo "Valor do aumento: " . number_format($valor_aumento, 2, ',', '.') . "<br>";
echo "Novo salário: " . number_format($total, 2, ',', '.') . "<br>";
?>