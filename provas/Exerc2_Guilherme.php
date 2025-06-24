


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
            <label for=""> Usuario: </label>
            <input type="text" name="nome_u" id="">
        </div>
        <br>
        <div>
            <label for=""> Senha </label>
            <input type="password" name="senha_u" id="">           
        </div>
        <br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>
   
</body>
</html>

<?php

 session_start();

  

    // Armazena em variáveis e-mail e senha digitados
    // pelo usuário enviados através do método POST
    if(isset($_POST['nome_u'])){
        $nome = $_POST['nome_u'];
    }
    if(isset($_POST['senha_u'])){
        $senha = $_POST['senha_u'];
    }

     if(isset($_POST['nome_u'])){
        // Vetor armazena os usuários que poderão logar
        $usuarios = [
            [
                'nome'=> 'adm',                
                'senha'=> '111',
            ],
            [
                'nome'=> 'user',
                'senha'=> '222',
            ]   
            ];

            // Percorre vetor para verificar se e-mail e senha estão
            // corretos
            foreach($usuarios as $usuario){
                // caso email e senha sejam válidos, armazena na sessão
                // o nome de usuário logado
                if($nome == $usuario['nome'] && $senha == $usuario['senha']){
                    // Armazena na session o nome do usuário logado
                    $_SESSION['usuario'] = $usuario['nome'];
                    date_default_timezone_set('America/Sao_Paulo');
                    $data=  date('H:i');
                    $_SESSION['horario'] = $data;
                    //direciona o navegador para a página index.php
                    header('Location: Exerc3_Guilherme.php');
                } else {
                    echo "Dados inválidos ";
                }
    } 
}

?>