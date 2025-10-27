<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Notas - Edição Sombria 😈</title>
</head>

<style>
    /* 🌑 Tema Sombrio de Vilão 😈 */
    body {
        background: radial-gradient(circle at center, #111 0%, #000 100%);
        color: #e50914; /* Vermelho intenso */
        font-family: 'Cinzel', serif;
        text-align: center;
        padding: 50px;
    }

    h2 {
        color: #ff0000;
        text-shadow: 0 0 15px #ff0000, 0 0 30px #7a0000;
        font-size: 2em;
        margin-bottom: 30px;
    }

    .container {
        display: inline-block;
        background-color: rgba(20, 20, 20, 0.85);
        border: 2px solid #e50914;
        border-radius: 15px;
        padding: 40px;
        box-shadow: 0 0 25px #e50914;
        transition: 0.3s;
    }

    .container:hover {
        transform: scale(1.02);
        box-shadow: 0 0 45px #ff1a1a;
    }

    label {
        color: #ff5555;
        font-weight: bold;
        text-shadow: 0 0 5px #ff0000;
    }

    input[type="text"],
    input[type="number"] {
        background-color: #111;
        color: #ffaa00;
        border: 2px solid #e50914;
        border-radius: 8px;
        padding: 8px;
        width: 80%;
        text-align: center;
        font-size: 1em;
        margin-top: 5px;
        transition: 0.3s;
    }

    input[type="text"]:focus,
    input[type="number"]:focus {
        outline: none;
        box-shadow: 0 0 10px #ff0000;
        border-color: #ff0000;
    }

    input[type="submit"] {
        background: linear-gradient(45deg, #e50914, #7a0000);
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 10px 25px;
        font-weight: bold;
        font-size: 1em;
        cursor: pointer;
        margin-top: 20px;
        text-transform: uppercase;
        box-shadow: 0 0 15px #e50914;
        transition: 0.3s;
    }

    input[type="submit"]:hover {
        background: linear-gradient(45deg, #ff0000, #990000);
        box-shadow: 0 0 35px #ff0000;
        transform: scale(1.05);
    }

    footer {
        margin-top: 40px;
        color: #777;
        font-style: italic;
        font-size: 14px;
    }
</style>

<body>
    <div class="container">
        <h2>Formulário de Notas</h2>
        <form action="atividade2.php?campanha=VoltaasAulas&&versao=1.0" method="post">
        
            <label>Nome do Aluno:</label><br>
            <input type="text" name="nome" required><br><br>

            <label>Idade do Aluno:</label><br>
            <input type="text" name="idade" required><br><br>

            <label>Turma:</label><br>
            <input type="text" name="turma" required><br><br>
            
            <label>Nota 1:</label><br>
            <input type="number" name="nota1" required><br><br>

            <label>Nota 2:</label><br>
            <input type="number" name="nota2" required><br><br>

            <input type="submit" value="Enviar">
        </form>
    </div>

    <footer>“Nem todos os heróis fazem provas... alguns apenas passam.” 🩸</footer>
</body>
</html>
