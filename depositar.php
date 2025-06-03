<?php require_once "session.php"; ?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Depositar</title><link rel="stylesheet" href="style.css"></head>
<body>
<h2>Depósito</h2>
<form method="post">
    Nº Conta: <input type="number" name="id" required><br>
    Valor: <input type="number" name="valor" required step="0.01"><br>
    <button type="submit">Depositar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $valor = floatval($_POST['valor']);
    if (isset($_SESSION['users'][$id])) {
        $user = unserialize($_SESSION['users'][$id]);
        $user->getAccount()->deposit($valor);
        $_SESSION['users'][$id] = serialize($user);
        echo "<p>Depósito realizado!</p>";
    } else {
        echo "<p>Conta não encontrada.</p>";
    }
}
?>
<a href="index.php">Voltar</a>
</body>
</html>
