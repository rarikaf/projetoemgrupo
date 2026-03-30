<?php

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$descricao = $_POST['descricao'];
$contato = $_POST['contato'];

$dados = "$nome | $tipo | $descricao | $contato\n";

// cria ou salva no arquivo
file_put_contents("dados.txt", $dados, FILE_APPEND);

echo "<h2>Animal cadastrado com sucesso! 🐾</h2>";
echo "<a href='index.php'>Voltar</a>";

?>