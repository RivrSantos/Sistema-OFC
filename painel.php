<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
    <style>
        body {
            background-color:rgb(3, 19, 33);
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 10px;
        }
        .box {
            background: -webkit-linear-gradient(left, #ffffff, #000000);
            padding: 40px;
            display: block;
            border: 5px groove;
            border-color: #222;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            position: sticky;
        }
        h1 {
            color:rgb(255, 255, 255);
            margin-bottom: 20px;
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
    <div class="box">
        <div id= "fundo"></div>
        <h1>Bem-vindo a Oficina Riffers!</h1>
        <p>Selecione uma opção abaixo:</p>
        <a href="recebe.php">Arquivados</a><br><br>
        <a href="listar.php">Banco de Dados</a><br><br>
        <a href="formulario_corrigido.php">Novo Cliente</a><br><br>
        <a href="front_end.php">Registro Clientes</a><br><br>
        <a href="servico.php">Registrar Serviço</a><br><br>
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>