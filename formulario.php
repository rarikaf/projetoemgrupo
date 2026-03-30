<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Animal</title>
    <link rel="stylesheet" href="estilo.css">
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

    <a href="index.php">Voltar</a>

</body>
</html>