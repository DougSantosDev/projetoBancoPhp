<?php require_once "session.php"; ?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Criar Conta</title><link rel="stylesheet" href="style.css"></head>
<body>
<h2>Criar Conta</h2>
<form method="post">
    Nome: <input type="text" name="name" required><br>
    CPF: <input type="text" name="cpf" required><br>
    Email: <input type="email" name="email" required><br>
    <button type="submit">Criar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = count($_SESSION['users']) + 1;
    $user = new User($_POST['name'], $_POST['cpf'], $_POST['email']);
    $account = new Account($id);
    $user->setAccount($account);
    $_SESSION['users'][$id] = serialize($user);
    echo "<p>Conta criada! Número: $id</p>";
}
?>
<a href="index.php">Voltar</a>
</body>
</html>
