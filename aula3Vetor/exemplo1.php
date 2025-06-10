<?php

echo "Vetor indexado <br>";
$estado[0] = "São Paulo";
$estado[1] = "Rio de Janeiro";
$estado[2] = "Bahia";
$estado[3] = "Minas Gerais";
$estado[4] = "Espírito Santo";

echo "<hr>";
echo "Lista o vetor estado usando o comando for";
for($i = 0; $i <=4; $i++) 
{
    echo $estado[$i] . "<br>";
}


echo "<br> <hr> <br>";

echo "Lista o vetor usando o comando foreach";

foreach($estado as $e){
    echo "$e <br>";
}

echo "<br> <hr> <br>";

echo " OUTRA MANEIRA DE SE CRIAR VETOR <br>";
$cidades = array("Guaratinguetá " , "Resende " , " Porto Seguro " , "Poços de Caldas " , " Guarapari ");

foreach($cidades as $ci) {
    echo "$ci <br>";

}

echo "<br> <hr> <br>";

print_r(value: $cidades);

?>