<?php
$metodo = $_SERVER['REQUEST_METHOD'];
$dados = ($metodo === 'POST') ? $_POST : $_GET;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Login realizado</title>
</head>
<body>
  <h1>Dados recebidos com sucesso!</h1>
  <p>Método usado: <strong><?= htmlspecialchars($metodo) ?></strong></p>

  <?php if (empty($dados)): ?>
    <p>Nenhum dado foi enviado.</p>
  <?php else: ?>
    <ul>
      <?php foreach ($dados as $campo => $valor): ?>
        <li>
          <strong><?= htmlspecialchars($campo) ?>:</strong>
          <?= htmlspecialchars(is_array($valor) ? implode(', ', $valor) : $valor) ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <p><a href="javascript:history.back()">Voltar</a></p>
</body>
</html>