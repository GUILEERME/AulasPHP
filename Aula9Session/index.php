<?php

    session_start();

    // Ao abrir página index.php, verifica se não tem usuário
    // na sessão e redireciona para a página login
    if(!$_SESSION['usuario'])
    {
        header('Location:login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Projeto Login </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cabecalho">
        <a href="logout.php"> Sair </a>
    </div>
    <h1>Bem-vindo <?= $_SESSION['usuario'] ?></h1>
    <h1>Você logou às <?=$_SESSION['horario']?></h1>
</body>
</html>