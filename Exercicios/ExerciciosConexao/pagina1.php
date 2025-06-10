<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
   
<h1>
    Dados do aluno
</h1>

 <form action="pagina2.php" method= "POST">
    <label >Nome:</label><br>
    <input type="text" name="nome" placeholder="Nome"><br><br>

    <label >Menção 1:</label><br>
    <input type="text" name="mencao1" required>

    <label>Menção 2:</label><br>
    <input type="text" name="mencao2" id="">

    <label>Menção 3:</label><br>
    <input type="text" name="mencao3" id="">

    <label>Menção 4:</label><br>
    <input type="text" name="mencao4" id="">

     <label>Número de faltas:</label><br>
    <input type="text" name="numerofaltas" id="">
    
     <input type="reset" value="Limpar"/>
    <input type="submit" value="Enviar"/>

 </form>
</body>
</html>