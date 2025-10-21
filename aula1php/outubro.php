<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outubro Rosa</title>
</head>
<style>
     body{
        background-color: #ffe4ec;
        text-align: center;
    }
</style>

<body>
    <div class="container">
    <h2> Formulário Outubro Rosa 💓</h2>
        <form action="outubro.php"   method="post">
        
        <label> Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label> Email:</label><br>
        <input type="email"  name="email" required><br><br>
        
        <label> Telefone:</label><br>
        <input type="number" name="telefone" required><br><br>

        <label> Idade:</label><br>
        <input type="number" name="idade" required><br><br>

        
        <label>Você já realizou o exame de mamografia esse ano?</label><br>
        
        <input type="radio" name="mamografia" value="Sim" required> Sim<br>
        <input type="radio" name="mamografia" value="Não">Não<br><br>
        <input type="submit" value="Enviar">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $mamografia = $_POST["mamografia"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $idade = $_POST["idade"];

        echo"<h3> 💗 Dados Recebidos (POST)</h3>";
        echo "Nome: $nome <br>";
        echo "Fez mamografia: $mamografia <br>";
        echo "Idade: $idade <br>";
        echo "Email: $email <br>";
        echo "Telefone: $telefone <br>";
    }
    ?>
</body>
</html>