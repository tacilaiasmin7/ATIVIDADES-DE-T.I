<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento Sombrio</title>
</head>

<style>
    /* 🌑 Estilo*/
    body {
        background: linear-gradient(135deg, #0a0a0a, #1a1a1a); /* Fundo escuro com degradê */
        color: #e50914; /* Vermelho intenso estilo “vilão” */
        font-family: 'Cinzel', serif; /* Fonte com ar de realeza sombria */
        text-align: center;
        padding: 40px;
    }

    h3 {
        color: #ff0000; /* Vermelho brilhante para destaque */
        text-shadow: 0 0 10px #ff0000, 0 0 20px #7a0000; /* Efeito de brilho sinistro */
    }

    br {
        line-height: 2em;
    }

    /* Moldura de caixa sinistra */
    .caixa {
        display: inline-block;
        background-color: rgba(20, 20, 20, 0.8);
        border: 2px solid #e50914;
        border-radius: 10px;
        padding: 20px 40px;
        box-shadow: 0 0 20px #e50914;
        transition: 0.3s;
        margin-top: 20px;
    }

    .caixa:hover {
        transform: scale(1.03);
        box-shadow: 0 0 40px #ff1a1a;
    }

    /* Pequeno detalhe no rodapé */
    footer {
        margin-top: 40px;
        font-size: 14px;
        color: #666;
        font-style: italic;
    }

    /* Efeito especial para aprovado/reprovado */
    .aprovado {
        color: #00ff66;
        text-shadow: 0 0 10px #00ff66;
        font-weight: bold;
    }

    .reprovado {
        color: #ff3333;
        text-shadow: 0 0 10px #ff3333;
        font-weight: bold;
    }

    .media {
        color: #ffaa00;
        text-shadow: 0 0 8px #ffaa00;
        font-weight: bold;
    }
</style>

<body>
   <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $turma = $_POST["turma"];
        $idade = $_POST["idade"];
        $nota1 = $_POST["nota1"];
        $nota2= $_POST["nota2"];

        echo "<div class='caixa'>";
        echo "<h3>📥 Informações Recebidas (POST)</h3>";
        echo "Nome do Aluno: $nome <br>";
        echo "Turma: $turma <br>";
        echo "Idade: $idade <br>";
        echo "Nota 1: $nota1 <br>";
        echo "Nota 2: $nota2 <br>";
        
        $media = ($nota1 + $nota2) /2;
        
        if($media >=6){
            echo "<span class='aprovado'>Aprovado</span> <br>";
        }
        else{
            echo "<span class='reprovado'>Reprovado</span> <br>";
        }

        echo "A média é: <span class='media'>$media</span> <br><br>";
        echo "</div>";
    }
    
    if(isset($_GET['campanha'])&& isset($_GET['versao'])){
        $campanha = $_GET['campanha'];
        $versao = $_GET['versao'];
        echo "<div class='caixa'>";
        echo "Campanha: $campanha <br>";
        echo "Versão: $versao <br>";
        echo "</div>";
   }
    ?> 

    <footer>“O conhecimento é poder... e o poder pertence a quem ousa.” 🩸</footer>
</body>
</html>

