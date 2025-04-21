
<!DOCTYPE html>
<html>
<head>
    <title>Serviços</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: -o-linear-gradient(left, #ffffff, #000000);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 140vh;
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
        .box {
            background: -ms-linear-gradient(left, #ffffff, #000000);
            padding: 40px;
            display: block;
            border: 5px groove;
            border-color: #222;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            position: sticky;
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

    <div class="box">
        <h2>Ordem de Serviço</h2>
        <form action="recebe.php" method="POST">
            Nome: <input type="text" name="nome"><br>
            Serviço: <input type="text" name="moto"><br>
            KM Atual: <input type="number" name="km"><br>
            Data: <input type="date" name="ultima"><br>
            Descriçao: <br><textarea name="descriçao" rows="4"></textarea><br>
            Peças: <br><textarea name="peças" rows="4"></textarea><br>
            Mao de Obra R$: <input type="number" name="Valor"><br>
            <input type="submit" value="Salvar">
            <a href="painel.php">Voltar</a>
            <a href="index.php">Sair</a>
        </form>
    </div>
</body>
</html>