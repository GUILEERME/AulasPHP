<?php
echo "Nome: " . $_POST["nome"];
echo "<br>";
echo "Sobrenome: " . $_POST["sobrenome"];
echo "<br>";
echo "Senha:" . $_POST["senha"];
echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="#" method = "post">
        <label> Nome: </label> <br>
        <input size="30" placeholder="Digite seu nome" type="text" name = "nome"><br><br>

        <label> Sobrenome: </label> <br>
        <input size="30" placeholder="Digite seu Sobrenome" type="text" name="sobrenome" required ><br> <br>

        <label> Senha: </label>
        <input type="password" name = "senha" size="15"
        placeholder="Digite sua senha" required>

        <button>Enviar

        </button>
    </form>
</body>
</html>