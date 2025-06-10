<?php

// Assim como o comando include_once, garante que o arquivo
// seja carregado apenas uma vez evitando erros de funções e variáveis
// carregadas mais de uma vez

echo " Teste comando require_once <br> <br>";
require_once('topo.php');
require_once('topo.php');
require_once('topo.php');


?>