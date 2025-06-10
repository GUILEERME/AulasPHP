<?php
echo " Inclusão do script php obrigatório";
echo " <br> <hr> <br>";

require('topo.php');
echo "<br> <hr> <br>";

require('funcaoData.php');
exibeData();
echo exibeData(); // Executa a função com retorno do arquivo funcaoData.php
echo "<br> <hr> <br>";

require('rodape.php');


?>