<?php
$arquivo = "dados.txt";
$animais = [];

if(file_exists($arquivo)){
    $linhas = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach($linhas as $linha){
        $partes = explode("|", $linha);
        $animais[] = [
            'nome' => trim($partes[0]),
            'tipo' => trim($partes[1]),
            'descricao' => trim($partes[2]),
            'contato' => trim($partes[3])
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Animais</title>
    <link rel="stylesheet" href="css/lista.css">
</head>
<body>
    <div class="container">
        <h2>Animais Cadastrados 🐾</h2>
        <div class="lista-container">
            <?php if(count($animais) > 0): ?>
                <?php foreach($animais as $animal): ?>
                    <div class="animal-card">
                        <h3><?= htmlspecialchars($animal['nome']) ?></h3>
                        <p><strong>Tipo:</strong> <?= htmlspecialchars($animal['tipo']) ?></p>
                        <p><strong>Descrição:</strong> <?= htmlspecialchars($animal['descricao']) ?></p>
                        <p><strong>Contato:</strong> <?= htmlspecialchars($animal['contato']) ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Nenhum animal cadastrado ainda.</p>
            <?php endif; ?>
        </div>
        <a href="index.php" class="voltar">Voltar</a>
    </div>
    
    <footer>
    <p>&copy; 2026 - Sistema de Cadastro de Animais. Todos os direitos reservados.</p>

</footer>
</body>
</html>
