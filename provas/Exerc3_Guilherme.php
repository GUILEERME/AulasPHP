<?php

session_start()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <div class="cabecalho">
        <a href="Exerc2_Guilherme.php"> Sair </a>
    </div>

    <h1>Bem-vindo <?= $_SESSION['usuario'] ?></h1>
    <h1>Você logou às <?=$_SESSION['horario']?></h1>

     <form action="#" method = "post">
        <label> Nome: </label> <br>
        <input size="30" placeholder="Digite seu nome" type="text" name = "nome"><br><br>

        <label> RG: </label> <br>
        <input size="30" placeholder="Digite seu RG" type="text" name="rg" required ><br> <br>

        <label> CPF: </label>
        <input type="password" name = "cpf" size="15"
        placeholder="Digite seu CPF" required>

        <button>Enviar

        </button>
    </form>
</body>
</html>

