<?php



//Criar uma função que calcule a idade de aposentadoria de uma pessoa
//Tratamento de exceção onde a idade é inválida
//Caso seja menor que 18 ou maior que 70

$idade = 60;

try {
    // Chama função como passagem de parâmetro
    $tempoRestante = calcularAposentadoria($idade);
    echo "Idade: $idade anos";
    echo " Falta $tempoRestante anos para aposentar";
} catch (Exception $e){
    echo " Não foi possível calcular aposentadoria <br> ";
    echo " Motivo : {$e -> getMessage()} ";
}

function calcularAposentadoria($idade){
    if($idade < 18){
        throw new Exception(' Ainda está muito longe de aposentar');
    }else if ($idade > 70) {
        throw new Exception(' Já deveria estar aposentdo ');
    }
    else {
        return 70 - $idade;
    }
}
?>