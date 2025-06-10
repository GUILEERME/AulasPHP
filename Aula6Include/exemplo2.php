<?php

echo "<h1> Exemplo 2 - Try Catch </h1>";
// Como o divisor é zero, o throw lança uma exceção , e o catch captura e exibe

try {
    $divisor = 0;
    if ($divisor == 0) {
        throw new Exception( " Erro: NÃO DÁ PRA DIVIDIR POR 0");
    } 
    $resultado = 10 / $divisor;
    echo " Resultado: $resultado";
} catch (Exception $e) {
    echo " Exceção capturada: " . $e->getMessage();
}

?>