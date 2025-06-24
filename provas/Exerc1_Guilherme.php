<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Calcula quadrado e cubo </h1>
    <form action="#" method="post">
    <label> Digite um número </label>
    <input type="text" name="numero" >
    <input type="submit" value="Calcular">
    <input type="reset" value="Limpar"> 
    </form>
</body>
</html>

<?php



try {
    if(is_numeric($_POST['numero'])){
        $numero = $_POST['numero'];
        $tamanho = strlen($numero);
        // Quadrado
        $quadrado = $numero * $numero;
        // Cubo
        $cubo = $numero * $numero * $numero;
        echo "Quadrado: " . $quadrado . '<br>';
        echo "Cubo: " . $cubo ."<br>";
        echo "Quantidade de caracteres: ". $tamanho ."<br>";
    } else {
        throw new Exception(" VALOR INVÁLIDO! "); 
}
}
catch (Exception $e) {
    echo $e-> getMessage();
}






?>