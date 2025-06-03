<?php include 'session.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Criar Conta</title>
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <h2>Criar Conta</h2>
  <form method="post">
    <input type="text" name="name" placeholder="Nome" required><br>
    <input type="text" name="cpf" placeholder="CPF" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <button type="submit">Criar</button>
  </form>
  <?php
    if ($_POST) {
        $accountNumber = count($_SESSION['users']) + 1;
        $user = new User($_POST['name'], $_POST['cpf'], $_POST['email']);
        $account = new Account($accountNumber);
        $user->setAccount($account);
        $_SESSION['users'][$accountNumber] = $user;
        echo "<p>Conta criada! Número: $accountNumber</p>";
    }
  ?>
  <a href="index.php">Voltar</a>
</body>
</html>
