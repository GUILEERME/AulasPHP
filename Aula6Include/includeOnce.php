<?php

echo " O arquivo é carregado apenas uma vez <br>";
echo " Teste - comando include_once <br> <hr>";

include_once('topo.php');
include_once('topo.php');
include_once('topo.php');

echo "<br> <hr> <br>";~

// O arquivo será carregado três vezes
// usando apenas o comando include

include('rodape.php');
include('rodape.php');
include('rodape.php');
?>