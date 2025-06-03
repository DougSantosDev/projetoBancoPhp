<?php require_once "session.php"; ?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Dados</title><link rel="stylesheet" href="style.css"></head>
<body>
<h2>Dados do Usuário</h2>
<form method="post">
    Nº Conta: <input type="number" name="id" required><br>
    <button type="submit">Buscar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    if (isset($_SESSION['users'][$id])) {
        $user = unserialize($_SESSION['users'][$id]);
        echo "<p>Nome: {$user->getName()}</p>";
        echo "<p>CPF: {$user->getCpf()}</p>";
        echo "<p>Email: {$user->getEmail()}</p>";
    } else {
        echo "<p>Usuário não encontrado.</p>";
    }
}
?>
<a href="index.php">Voltar</a>
</body>
</html>
