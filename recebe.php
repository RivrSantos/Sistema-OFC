<!DOCTYPE html>
<html>
<head>
    <title>Revisões</title>
    <style>
        body { font-family: Arial; padding: 20px;background-image: linear-gradient(rgb(33, 33, 84), rgb(26, 13, 141), rgb(33, 18, 172)) }
        h2 { color: #0077cc; }
        .ficha { background: #fff; padding: 10px; margin-bottom: 10px; border-left: 5px solid #0077cc; }
        nav { display: flex; justify-content: space-around; position: sticky; top: 0px}
        footer { display: block; position: sticky; top:  0px; background-color: #222; height: 80px; width: 100%}
    </style>
</head>
<body>
    <footer>
    <nav>
        <h2><a href="formulario_corrigido.php">Formulario</a></h2>
        <h2><a href="front_end.php">Registros</a></h2>
        <h2><a href="conexao.php">Conexao</a></h2>
    </nav>
    </footer>

<h2>📋 Fichas Registradas</h2>
<?php
$nome = $_POST["nome"];
$moto = $_POST["moto"];
$ano = $_POST["ano"];
$km = $_POST["km"];
$ultima= $_POST["ultima"];

echo "<h2>Status: Recebida</h2>";
echo "Nome: $nome<br>";
echo "Moto: $moto<br>";
echo "Ano: $ano<br>";
echo "Km: $km<br>";
echo "Ultima Revisao: $ultima<br>";

if(empty($nome) || empty($moto)) {
    echo "Preencha todos os campos!";
} else {
    echo "✅ Revisao registrada para: $nome \n";
}

// Montando ficha
$linha = "Nome: $nome | Moto: $moto | Ano: $ano | Km: $km km | Ultima Revisao: $ultima\n|";
file_put_contents("fichas.txt", $linha, FILE_APPEND);

// $sql = "INSERT INTO fichas (nome, moto, ano, km, ultima)
//         VALUES ('$nome', '$moto', $ano, $km, '$ultima')";

// file_put_contents("fichas.db", $sql);

// Salva arquivo (cria se não existir)

echo "Ficha salva com sucesso!";

// FILE_APPEND serve pra adicionar sem apagar nada no arquivo.

?>


</body>

</html>
