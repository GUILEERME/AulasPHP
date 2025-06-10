<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Calcula raiz quadrada</h1>
    <form action="#" method="post">
    <label> Digite um número </label>
    <input type="text" name="numero">
    <input type="submit" value="Calcular">
    </form>
</body>
</html>

<?php

// Verifica se o método POST foi gerado
if(count($_POST) > 0)
{
    // Verifica se não está vazio o campo número
    if(!empty($_POST["numero"]))
    {
    $numero = $_POST["numero"];
    //sqrt: função que calcula a raiz quadrada
    $raiz = sqrt($numero);
    echo "Raiz quadrada do número" . $numero .  "é"  . $raiz;
    }
    else{
        echo "Número não foi preenchido";
    }
} 
?>