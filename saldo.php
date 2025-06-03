<?php include 'session.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Saldo</title>
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <h2>Consultar Saldo</h2>
  <form method="post">
    <input type="number" name="conta" placeholder="Nº Conta" required><br>
    <button type="submit">Ver saldo</button>
  </form>
  <?php
    if ($_POST) {
        $n = $_POST['conta'];
        if (isset($_SESSION['users'][$n])) {
            $saldo = $_SESSION['users'][$n]->getAccount()->getBalance();
            echo "<p>Saldo: R$ " . number_format($saldo, 2, ',', '.') . "</p>";
        } else {
            echo "<p>Conta não encontrada.</p>";
        }
    }
  ?>
  <a href="index.php">Voltar</a>
</body>
</html>
