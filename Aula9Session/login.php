<?php
    // Inicializa a sessão
    session_start();

    // Armazena em variáveis e-mail e senha digitados
    // pelo usuário enviados através do método POST
    if(isset($_POST['email_u'])){
        $email = $_POST['email_u'];
    }
    if(isset($_POST['email_u'])){
        $senha = $_POST['senha_u'];
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
    <h1>Faça seu login</h1>
    <form action="#" method="post">
        <div>
            <label for=""> E-mail: </label>
            <input type="email" name="email_u" id="">
        </div>
        <br>
        <div>
            <label for=""> Senha </label>
            <input type="password" name="senha_u" id="">           
        </div>
        <br>
        <button> Entrar </button>
    </form>
</body>

</html>