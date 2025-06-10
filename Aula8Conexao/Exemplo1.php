<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Método GET e POST</title>
</head>
<body>
    <h1> Faça seu login </h1>

   <!--  Form action é pra onde os dados do formulário vão -->
    
    
    <form action="ex_post2.php" method = "post">
        <label> Nome: </label> <br>
        <input type="text" name = "nome"><br><br>

        <label> E-mail: </label> <br>
        <input type="email" name="email" required ><br> <br>

        <input type="reset" value="Limpar"/>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>