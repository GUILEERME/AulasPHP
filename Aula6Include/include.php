<?php

//Faz a inclusão de um script PHP em outro arquivo
echo " EXEMPLO COMANDO INCLUDE  <br> <br> <br>";

// Incluindo o arquivo topo.php na página

include('topo.php');
echo "<br> <hr> <br>";

// incluindo o arquivo  funcoes.php na página
include('funcaoData.php');
exibeHoje();
echo "<br> <hr> <br>";

// incluindo o arquivo rodapé.php nas página
include('rodape.php');

?>