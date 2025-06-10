<?php
const nome = "José";
const anoNascimento = 2009;
$anoAtual = 2025;

// Calculando a idade
$idadeAnos = $anoAtual - anoNascimento;
$idadeMeses = $idadeAnos * 12;
$idadeSemana = $idadeAnos * 52;
$idadeDias = $idadeAnos * 365;

//Exibindo
echo "Nome: ".nome."<br>";
echo "Ano de Nascimento: ".anoNascimento."<br>";
echo "Idade em anos: ".$idadeAnos."<br>";
echo "Idade em meses: ".$idadeMeses."<br>";
echo "Idade em semanas: ".$idadeSemana."<br>";
?>