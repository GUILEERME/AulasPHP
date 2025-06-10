<?php

$valorEtiqueta = 100;
$formaDePagamento = "À vista Cartão de débito";
$valorPago = 0;

switch ($formaDePagamento) {
    case "A vista no dinheiro ou pix" :
        $valorPago = $valorEtiqueta * 0.15;
        break;
    case "À vista Cartão de débito" :
        $valorPago = $valorEtiqueta - $valorEtiqueta * 0.10;
        break;
     case " À vista no Cartão de crédito" :
        $valorPago = $valorEtiqueta - $valorEtiqueta * 0.05;
        break;
     case "Parcelado em duas vezes" :
        $valorPago = $valorEtiqueta;
        break; 
    case "Parcelado em três vezes" :
        $valorPago = $valorEtiqueta + $valorEtiqueta * 0.10;
        break;
     default:
     echo "Forma de pagamento inválida.";
    } 

    echo "Valor pago: R$ ".number_format($valorPago, 2, ',', '.');

?>