<?php

$multa = 0;
$velocidadeAtual = 40;
$velocidadePermitida = 10;


$diferenca = $velocidadeAtual - $velocidadePermitida;

if ($diferenca > 0 && $diferenca <= 10) {
    $multa = 50;
} elseif ($diferenca >= 11 && $diferenca <= 30) {
    $multa = 100;
} elseif ($diferenca >= 31) {
    $multa = 200;
}

if ($multa > 0) {
    echo "O motorista pagará R$ " . number_format($multa, 2, ',', '.') . " de multa.";
} else {
    echo "O motorista está dentro do limite de velocidade.";
}

?>
