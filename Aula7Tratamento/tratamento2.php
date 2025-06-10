<?php

echo " <h1> Exemplo 3 </h1>";

$nome = "Jão";
$senha = " s ";

try
{
    $qtd = strlen($senha);
    if($qtd == 0) {
        //caso variável senha esteja vazia entra no tratamento de exceção
        throw new Exception('Senha está vazia!');
    }
    else if ($qtd < 6){
        // Caso variável senha esteja com menos de 6 caracteres
        throw new Exception('Preencha senha com no mínimo 6 caracteres!');
    }
    else {
        echo $nome . '<br>';
        echo 'Quantidade de caracteres: ' . $qtd;
    }

} catch(Exception $e) {
    echo $e->getMessage();
}

?>