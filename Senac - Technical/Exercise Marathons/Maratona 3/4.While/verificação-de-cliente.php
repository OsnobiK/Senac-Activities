<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verificação de Cliente</title>
</head>
<body>
  <h2>Verificação de Cliente</h2>
  <form action="" method="post">
    <label for="senha">Digite a senha:</label>
    <input type="password" name="senha" id="senha">
    <input type="submit" value="Enviar">
  </form>

  <?php 
  $senhaCorreta = "35rg3";
  $tentativas = 3;

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    
    if (!isset($_SESSION['tentativas'])) {
      $_SESSION['tentativas'] = $tentativas;
    }

    $senhaDigitada = $_POST['senha'];

    while ($_SESSION['tentativas'] > 0) {
      if ($senhaDigitada === $senhaCorreta) {
        echo "Senha correta!";
        $_SESSION['tentativas'] = $tentativas; // Reset attempts
        break;
      } else {
        $_SESSION['tentativas']--;
        echo "Senha incorreta. Você tem {$_SESSION['tentativas']} tentativas restantes.<br>";
        break;
      }
    }

    if ($_SESSION['tentativas'] === 0) {
      echo "Seu login está bloqueado.";
    }
  }
  ?>
</body>
</html>