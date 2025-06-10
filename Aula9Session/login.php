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

    // Verifica se o e-mail está sendo setado(preenchido)
    if(isset($_POST['email_u'])){
        // Vetor armazena os usuários que poderão logar
        $usuarios = [
            [
                'nome'=> 'professor',
                'email'=> 'professor@gmail.com',
                'senha'=> '123',
            ],
            [
                'nome'=> 'aluno',
                'email'=> 'aluno@gmail.com',
                'senha'=> '456',
            ],
            [
                'nome'=> 'jão pedro',
                'email'=> 'jaopedro@gmail.com',
                'senha '=> '1',
            ]
            ];

            // Percorre vetor para verificar se e-mail e senha estão
            // corretos
            foreach($usuarios as $usuario){
                // caso email e senha sejam válidos, armazena na sessão
                // o nome de usuário logado
                if($email == $usuario['email'] && $senha == $usuario['senha']){
                    // Armazena na session o nome do usuário logado
                    $_SESSION['usuario'] = $usuario['nome'];
                    date_default_timezone_set('America/Sao_Paulo');
                    $data=  date('H:i');
                    $_SESSION['horario'] = $data;
                    //direciona o navegador para a página index.php
                    header('Location: index.php');
                }
    }
} // fecha if 
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