<!DOCTYPE html>
<html lang="en">
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
   <?php
   
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $categoria = $_POST["categoria"];
        $preco = $_POST["preco"];
        $quantidade= $_POST["quantidade"];
}
    echo"<h3> 📥 Dados Recebidos (POST)</h3>";
        echo "Nome do Produto: $nome <br>";
        echo "Categoria: $categoria <br>";
        echo "Preço: R$ $preco <br>";
        echo "Quantidade: $quantidade <br><br>";

        echo "<h3> Informações da Campanha 🛍️</h3>";
        if(isset($_GET['campanha'])&& isset($_GET['versao'])){
        $campanha = $_GET['campanha'];
        $versao = $_GET['versao'];
        echo "Campanha $campanha <br>";
        echo "Versão $versao <br>";
   }
    ?> 
</body>
</html>