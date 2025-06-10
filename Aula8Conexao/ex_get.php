<?php
echo "Método GET";
echo"<br> <hr> <br>";

// JAMAIS USE GET PARA FORMULÁRIOS SEU FILHO DA &*@)

//Apenas para ver se funciona
// print_r($_GET);

// Pegar as informações do formulário
echo "<br> <hr> <BR>";
echo "Nome: " . $_GET["nome"] ; //exibe somente nome
echo "<br>";
echo "E-mail: " . $_GET["email"] ; //exibe somente o e-mail digitado

