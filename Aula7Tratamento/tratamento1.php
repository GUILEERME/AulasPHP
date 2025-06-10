<?php

 echo " <h1> Try Catch </h1>";

// Tratamento de exceção para chamar um arquivo inexistente no php 
// utilizando o caminho include

try{ //Tentar 
    // Lançar excessão para a regra que foi violada
    throw new Exception( ' Arquivo não disponível no momento');
    include('arquivo.php');
}
//casso gere um erro - classe exception - variável $e armazena msg de erro
catch (Exception $e) {
    echo $e-> getMessage();
}

?>