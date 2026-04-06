<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Animal</title>
<<<<<<< HEAD
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
=======
    <link rel="stylesheet" href="css/formulario.css">
>>>>>>> b673ae2e2d813fe4f1d43a0db5df687a961868ef
</head>
<body>
    <div class="container">
        <h2>Cadastro de Animal</h2>

        <form action="processa.php" method="POST">

            <label>Nome do Animal:</label>
            <input type="text" name="nome" required>

            <!-- ========================================== -->
            <!-- TIPO DO ANIMAL COM OPÇÃO "OUTRO" -->
            <!-- ========================================== -->
            <label>Tipo:</label>
            <select name="tipo" id="tipoAnimal" onchange="verificaOutro()">
                <option value="Cachorro">Cachorro</option>
                <option value="Gato">Gato</option>
                <option value="Outro">Outro</option>
            </select>

            <!-- CAMPO DE TEXTO PARA "OUTRO" ANIMAL -->
            <input type="text" name="tipo_outro" id="tipoOutro" placeholder="Digite qual animal" style="display:none; margin-top:10px;">

            <!-- ========================================== -->

            <label>Descrição:</label>
            <textarea name="descricao" required></textarea>

            <label>Contato:</label>
            <input type="text" name="contato" required>

            <button type="submit">Cadastrar</button>

<<<<<<< HEAD
    <br>
    <a href="index.php">Voltar</a>

    <footer>
        <p>&copy; 2026 - Sistema de Cadastro de Animais. Todos os direitos reservados.</p>
    </footer>
    </body>
=======
        </form>

        <a href="index.php">Voltar</a>
    </div>

    <!-- ========================================== -->
    <!-- JAVASCRIPT PARA MOSTRAR O CAMPO "OUTRO" -->
    <!-- ========================================== -->
    <script>
        function verificaOutro() {
            const select = document.getElementById('tipoAnimal');
            const outro = document.getElementById('tipoOutro');

            if(select.value === 'Outro') {
                outro.style.display = 'block'; // mostra o campo
                outro.required = true;         // torna obrigatório
            } else {
                outro.style.display = 'none';  // esconde o campo
                outro.required = false;        // não obrigatório
            }
        }
    </script>
   
   <footer>
    <p>🐾 Projeto Conscientização de Animais Abandonados &copy; 2026</p>

</footer>
</body>

>>>>>>> b673ae2e2d813fe4f1d43a0db5df687a961868ef
</html>