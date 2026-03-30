<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Animais Cadastrados</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <h2>Animais para Adoção</h2>

    <?php
        if (file_exists("dados.txt")) {
            $linhas = file("dados.txt");

            foreach ($linhas as $linha) {
                echo "<div class='card'>$linha</div>";
            }
        } else {
            echo "<p>Nenhum animal cadastrado ainda.</p>";
        }
    ?>

    <a href="index.php">Voltar</a>

</body>
</html>