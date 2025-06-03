<?php include 'session.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Dados do Usuário</title>
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <h2>Consultar Dados</h2>
  <form method="post">
    <input type="number" name="conta" placeholder="Nº Conta" required><br>
    <button type="submit">Ver dados</button>
  </form>
  <?php
    if ($_POST) {
        $n = $_POST['conta'];
        if (isset($_SESSION['users'][$n])) {
            $u = $_SESSION['users'][$n];
            echo "<p>Nome: " . $u->getName() . "</p>";
            echo "<p>CPF: " . $u->getCpf() . "</p>";
            echo "<p>Email: " . $u->getEmail() . "</p>";
        } else {
            echo "<p>Conta não encontrada.</p>";
        }
    }
  ?>
  <a href="index.php">Voltar</a>
</body>
</html>
