<?php require_once "session.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Ver Saldo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Ver Saldo</h2>

    <form method="post">
        Nº da Conta: <input type="number" name="id" required><br>
        <button type="submit">Consultar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        if (isset($_SESSION['users'][$id])) {
            $user = unserialize($_SESSION['users'][$id]);
            $saldo = $user->getAccount()->getBalance();
            echo "<p>Saldo atual: R$ " . number_format($saldo, 2, ',', '.') . "</p>";
        } else {
            echo "<p>Conta não encontrada.</p>";
        }
    }
    ?>

    <a href="index.php">Voltar</a>
</body>
</html>
