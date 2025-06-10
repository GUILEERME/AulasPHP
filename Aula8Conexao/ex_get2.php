<?php
//isset: se está setado(está preenchido)
if(isset($_GET["idprod"])){
    echo "Usuário clicou no produto para comprar";
    echo "Id produto = " . $_GET["idprod"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h3>
            Produto 1
        </h3>
        <a href="ex_get2.php?idprod=1"> Comprar </a>
    </div>
    <div>
        <h3>
            Produto 2
        </h3>
        <a href="ex_get2.php?idprod=2"> Comprar </a>
    </div>
    <div>
        <h3>
            Produto 3
        </h3>
        <a href="ex_get2.php?idprod=3"> Comprar </a>
    </div>
</body>
</html>