<?php
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$tipo_outro = $_POST['tipo_outro'] ?? '';
$descricao = $_POST['descricao'];
$contato = $_POST['contato'];

// Se escolheu "Outro", usa o campo de texto
if ($tipo === 'Outro' && !empty($tipo_outro)) {
    $tipo = $tipo_outro;
}

// Salva os dados
$dados = "$nome | $tipo | $descricao | $contato\n";
file_put_contents("dados.txt", $dados, FILE_APPEND);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Concluído</title>
    <link rel="stylesheet" href="css/processa.css">
</head>
<body>
    <div class="container">
        <h2>Animal cadastrado com sucesso! 🐾</h2>
        <a href="index.php" class="voltar">Voltar</a>
        <a href="lista.php" class="voltar">Ver Lista de Animais</a>
    </div>
    <footer>
    
</body>

</html>