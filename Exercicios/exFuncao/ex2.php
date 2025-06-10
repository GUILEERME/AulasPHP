<?php

echo " <h2> Exercício 1 </h2> ";

function calcularSalario() {

    $nome = " Cleberson ";
    $nivel = " 1 ";
    $horasTrabalhadas = 40;
    $salario = 0;

    if ($nivel == 1) {
        $salario = 15 * $horasTrabalhadas;
    } else if($nivel == 2) {
        $salario = 20 * $horasTrabalhadas;
    } else if ($nivel == 3) {
        $salario = 25 * $horasTrabalhadas;
    } else {
        echo " Esse nível não existe";
    }

    echo "  Nome: $nome <br> " . " Nível: $nivel <br>   " . " Horas trabalhadas: $horasTrabalhadas <br> " . " Salário = $salario";

}

calcularSalario();

echo "<br> <hr> <br>";

echo " <h2> Exercício 2  </h2> <br>";

function exibirMes($mes) {

    

    switch($mes) {
        case 1:
            echo" Janeiro ";
            break;
        
        case 2:
            echo" Fevereiro ";
            break;

        case 3:
            echo" Março ";
            break;

        case 4:
            echo" Abril ";
            break;
        
        case 5:
            echo" Maio";
            break;
        
        case 6:
            echo" Junho ";
            break;

        case 7:
            echo" Julho ";
            break;
            
        case 8:
            echo" Agosto ";            
            break;

        case 9:
            echo" Setembro ";
            break;

         case 10:
            echo" Outbro ";
            break;

        case 11:
            echo" Novembro ";
            break;

        case 12:
            echo" Dezembro ";
            break;

        default:
            echo " Não existe esse mês";
            break;
    }

}

echo exibirMes(4);

echo "<br> <hr> <br>";

echo " <h2> Exercício 3 </h2> <br>";

function calcularValor() {

    $valorProduto = 10.00;
    $codigo = "1";
    $valorFinal = 0.0;
    
    if ($codigo == 1 ) {
        $valorFinal = $valorProduto - $valorProduto * 0.10;
    } else if ($codigo == 2) {
        $valorFinal = $valorProduto;
    } else if ($codigo == 3) {
        $valorFinal = $valorProduto + $valorProduto * 0.05;
    } else {
        echo " Código inválido ";
    }

    return $valorFinal;
}

echo calcularValor();

echo "<br> <hr> <br>";

echo " <h2> Exercício 4  </h2> <br>";

function classificar($codigo) {

 
 $classificacao = " ";

 if ($codigo >= 1 && $codigo < 6 ) {
    $classificacao = " Alimento não-perecível  " ;
 } else if ($codigo >= 6 && $codigo  <= 10 ) {
    $classificacao = " Alimento perecível ";
 } else if ($codigo >= 11 && $codigo <= 13) {
    $classificacao = " Vestuário ";
 } else if ($codigo == 14 ) {
    $classificacao = " Higiene Pessoal ";
 } else if ($codigo == 15) {
    $classificacao = " Limpeza e utensílios domésticos";
 } else {
    $classificacao = " Inválido ";
 }

 echo " Código: $codigo <br>";
 return $classificacao;

}

echo classificar(20);