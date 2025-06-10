<?php
echo "Dados enviados do formulário Login";
echo "<br><br>";

// empty: verifica se não está vazio
if (!empty($_POST["nome"])){
    echo "Nome: " . $_POST["nome"];
}
else{
    echo "Nome não foi preenchido";
}
echo "<br>";

if(!empty($_POST["email"])){
    echo "E-mail:" . $_POST["email"];
}
else{
    echo "E-mail não foi preenchido";
}
?>