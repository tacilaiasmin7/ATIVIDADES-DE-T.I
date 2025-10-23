<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     body{
        background-color: cornflowerblue;
        text-align: center;
    }
</style>

<body>
    <div class="container">
    <h2>Blackfriday 🛒</h2>
        <form action="pagina2.php?campanha=blackfriday&&versao=1.0"   method="post">
        
        <label> Nome do Produto:</label><br>
        <input type="text" name="nome" required><br><br>

        <label> Categoria:</label><br>
        <input type="text"  name="categoria" required><br><br>
        
        <label> Preço:</label><br>
        <input type="number" min="0" step="0.01" name="preco" required><br><br>

        <label> Quantidade em Estoque:</label><br>
        <input type="number" min="0" step="1" name="quantidade" required><br><br>

        <input type="submit" value="Enviar">

    
</form>
</body>
</html>