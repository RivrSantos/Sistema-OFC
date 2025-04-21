<!DOCTYPE html>
<html>
<head>
    <title>Revisões</title>
    <style>
        body { font-family: Arial; padding: 0px; border: 0px; background-image: linear-gradient(rgb(33, 33, 84), rgb(26, 13, 141), rgb(33, 18, 172)) }
        h2 { color: #0077cc; }
        .ficha { background: #fff; padding: 1px; margin-bottom: 5px; border-left: 8px solid #0077cc; }
        nav { display: flex; justify-content: space-around; position: sticky; top: 0px}
        footer { display: block; position: sticky; top:  0px; background-color: #222; height: 80px; width: 100%;}
    </style>
</head>
<body>
    <footer>
    <nav>
        <h2><a href="formulario_corrigido.php">Formulario</a></h2>
        <h2><a href="front_end.php">Registros</a></h2>
        <h2><a href="recebe.php">Cadastros</a></h2>
    </nav>
    </footer>

<h2>📋 Conectando com Banco SQLITE3</h2>

<?php
// include "login.php";
session_start();

$usuario = $_POST["usuario"];
$senha = $_POST["senha"]; // ou password_hash mais tarde

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    $_SESSION["logado"] = true;
    header("Location: fichas.db");
} else {
    echo "❌ Usuário ou senha inválidos.";
}
?>


</body>

</html>
<!-- senha= LAm6_5-iU6LyS4)[ -->