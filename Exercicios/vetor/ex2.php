<?php

$vetor1 = array( 0 , 1 , 2 , 3 , 4 , 5);
$vetor2 = array( 5, 4 , 3 , 2 , 1 ,0);
$resultado = array();
$i = 0;

for( $i = 0; $i < 5; $i++){
    $resultado[$i] = $vetor1[$i] * $vetor2[$i];
}
foreach ($resultado as $res) {
    echo $res . " , ";
}


?>