
<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: -webkit-linear-gradient(left, #ffffff, #000000);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 120vh;
        }
        .form-container {
            display: block inline;
            background: #fff;
            padding: 100px;
            border: 2px solid;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .nav-container {
            display: flex inline;
            justify-content: space-around;
            align-items: center;
            position: sticky;
            height: 1px;
            padding bottom: 20px;
            padding-top: 10px;
            padding-right: 100px;
            height: 50px;
        }
        a {
            display: inline-block;
            margin-top: 10px;
            background: #0077cc;
            color: white;
            padding: 10px 10px;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background: #005fa3;
        }
        h1, h2 {
            color: #0077cc;
            margin-bottom: 20px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #0077cc;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #005fa3;
        }

    </style>
</head>
<body>

    <div class="form-container">
        <h2>Cadastro de Cliente</h2>
        <form action="recebe.php" method="POST">
            Nome: <input type="text" name="nome"><br>
            Moto: <input type="text" name="moto"><br>
            Ano: <input type="number" name="ano"><br>
            KM Atual: <input type="number" name="km"><br>
            Última Revisão: <input type="date" name="ultima"><br>
            Observações: <br><textarea name="observacoes" rows="4"></textarea><br>
            <input type="submit" value="Salvar">
            <a href="painel.php">Voltar</a>
            <a href="index.php">Sair</a>
        </form>
    </div>
</body>
</html>
