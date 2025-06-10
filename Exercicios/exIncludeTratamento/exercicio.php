
<?php

echo "<h1> Exercício 1 </h1>";

include_once('cabecalho.php');
echo "<br> <hr> <br>";
include('corpo.php');
echo "<br> <hr> <br>";
include('rodape.php');

echo "<br> <hr> <br>";

echo "<h1> Exercício 2 </h1>";

$numero = 10;

try{
    if($numero == 0){
        throw new Exception(" Número igual a 0");
    }elseif (!is_numeric($numero)) {
        throw new Exception( " Você não inseriu um número" );
    }
}
catch(Exception $e){
    echo $e->getMessage();
}

echo sqrt($numero);

echo "<br> <hr> <br>";
echo "<h1> Exercício 3 <h1>";

$salario = 9000;
$anoAdmissao = 2009;

function aumento($salario, $anoAdmissao){
    
    $tempoServico = 2025 - $anoAdmissao;
    $aumento = 0;
    $salarioFinal = 0;
    


    if($tempoServico >= 10){
        $aumento = $salario + ($salario * 0.1);
       
    } 
        else {
        $aumento = $salario + ($salario * 0.05);
        }

    return $aumento;
    echo ($salarioFinal);

}

echo aumento($salario, $anoAdmissao);

echo "<br> <hr> <br>";
echo "<h1> Exercício 4 <h1>";

$anoAdmissao = 2009; 
$salario = 201;
$tempoAdmissao = 2025 - $anoAdmissao;


try{
    if($tempoAdmissao < 5){
        throw new Exception (" O tempo de admissão dever ser  maior ou igual a 5 anos ");
    } elseif($salario < 1284){
        throw new Exception (" O salário deve ser maior que um salário mínimo");
    }

} catch (Exception $e){
    echo $e -> getMessage();
}

?>
