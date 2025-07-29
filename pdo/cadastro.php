<?php
// verifica se o botão cadastrar foi clicado,
// se sim, gera o método POST
if(count($_POST)> 0){
    // executa o arquivo conexao.php
    require_once("conexao.php");
    // chama a fç novaConexao - faz conexão BD cadastro
    $conexao = novaConexao();

    try{
        $sql = "INSERT INTO pessoas (nome, rg, cpf, email, telefone)
        VALUES (:n, :r, :c, :e, :f)";
        // prepara o comando SQL que você vai executar no banco de dados
        $stmt = $conexao->prepare($sql);
        // preveni ataques de SQL Injection, o valor do parâmetro é tratado como
        // um valor literal, não como parte da comando SQL
        $stmt->bindValue(':n' , $_POST['nome']);
        $stmt->bindValue(':r',$_POST['rg']);
        $stmt->bindValue(':c',$_POST['cpf']);
        $stmt->bindValue('e',$_POST['email']);
        $stmt->bindValue('f',$_POST['fone']);
        $stmt->execute(); // executa a sql
        echo "Registro cadastrado com sucesso";
    } // fecha o try
    catch(PDOException $e) {
        echo " Erro ao inserir registro". $e->getMessage();
}
} // fecha o if 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <h1>Cadastro de pessoas físicas</h1>
        Nome:
        <input type="text" size="50" placeholder="Digite o nome" 
        required name="nome">
        <br><br>
        RG:
        <input type="text" size="50" placeholder="Digite o RG" 
        required name="rg">
        <br><br>
        CPF:
        <input type="text" size="15" placeholder="Digite o CPF" 
        required name="cpf">
        <br><br>
        E-mail:
        <input type="email" size="40" placeholder="Digite o e-mail"     
        required name="email">
        <br><br>
        Contato:
        <input type="text" size="15" placeholder="Digite o telefone" 
        required name="fone">
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>
    
</body>
</html>