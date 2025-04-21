<!DOCTYPE html>
<html>
<head>
    <title>Revisões</title>
    <style>
        body {
            font-family: Arial;
            padding: 1px;
            border: 0px;
            background-image: -webkit-linear-gradient(left, #ffffff, #000000);
        }
        h1 {
            color:rgb(255, 255, 255);
        }
        h2 {
            color: #0077cc;
        }
        .ficha {background: #fff;
            padding: 10px;
            margin-bottom: 5px;
            border-left: 8px solid #0077cc;
        }
        nav {
            display: flex;
            justify-content: space-around;
            position: sticky;
            top: 0px;
        }
        footer {
            display: block;
            position: sticky;
            top: 0px;
            background-color: #222;
            height: 100px;
            width: 100%;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            background: #0077cc;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background: #005fa3;
        }
    </style>
</head>
<body>
    <footer>
        <nav>
            <h3><a href="formulario_corrigido.php">Formulario</a></h3>
            <h3><a href="conexao.php">Conexao</a></h3>
            <h3><a href="recebe.php">Cadastros</a></h3>
            <h3><a href="painel.php">Voltar</a></h3>
        </nav>
    </footer>

    <h2>📋 Fichas Registradas</h2>

<?php
$arquivo = "fichas.txt";

if (file_exists($arquivo)) {
    $linhas = file($arquivo);

    foreach ($linhas as $linha) {
        echo "<div class='ficha'>" . nl2br(htmlspecialchars($linha)) . "</div>";
    }
} else {
    echo "<p>Nenhuma ficha registrada.</p>";
}
?>

</body>
</html>
