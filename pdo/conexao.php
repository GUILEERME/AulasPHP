<?php

function novaConexao()
{
    $dsn = 'mysql:host=localhost;dbname=cadastro';
    $usuario = 'root';
    $senha = '';
    try {
        // Cria objeto com conexão de classe PDO
        $conexao = new PDO($dsn, $usuario, $senha);
        return $conexao;
    } catch (PDOException $e) {
        echo 'Erro ao conectar com o Banco de dados';

    }


}


?>