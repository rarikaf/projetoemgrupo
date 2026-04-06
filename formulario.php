<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Animal</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        /* Sugestão de estilo para o footer */
        footer {
            margin-top: 20px;
            padding: 10px;
            border-top: 1px solid #ccc;
            text-align: center;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>

    <h2>Cadastro de Animal</h2>

    <form action="processa.php" method="POST">

        <label>Nome do Animal:</label>
        <input type="text" name="nome" required>

        <label>Tipo:</label>
        <select name="tipo">
            <option value="Cachorro">Cachorro</option>
            <option value="Gato">Gato</option>
        </select>

        <label>Descrição:</label>
        <textarea name="descricao" required></textarea>

        <label>Contato:</label>
        <input type="text" name="contato" required>

        <button type="submit">Cadastrar</button>

    </form>

    <br>
    <a href="index.php">Voltar</a>

    <footer>
        <p>&copy; 2026 - Sistema de Cadastro de Animais. Todos os direitos reservados.</p>
    </footer>
    </body>
</html>