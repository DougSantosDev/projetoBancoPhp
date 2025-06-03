<?php include 'session.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sacar</title>
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <h2>Sacar</h2>
  <form method="post">
    <input type="number" name="conta" placeholder="Nº Conta" required><br>
    <input type="number" name="valor" placeholder="Valor" required><br>
    <button type="submit">Sacar</button>
  </form>
  <?php
    if ($_POST) {
        $n = $_POST['conta'];
        $valor = $_POST['valor'];
        if (isset($_SESSION['users'][$n])) {
            $_SESSION['users'][$n]->getAccount()->withdraw($valor);
            echo "<p>Saque realizado.</p>";
        } else {
            echo "<p>Conta não encontrada.</p>";
        }
    }
  ?>
  <a href="index.php">Voltar</a>
</body>
</html>
