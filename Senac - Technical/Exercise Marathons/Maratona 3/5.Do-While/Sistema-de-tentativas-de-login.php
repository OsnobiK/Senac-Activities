<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas de Tentativas de Login</title>
</head>
<body>

    <h2>Sistema de Tentativas de Login</h2>
    
    <form action="" method="post">
        <input type="password" name="senha" id="senha" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    session_start();
    if (!isset($_SESSION['tentativas'])) {
        $_SESSION['tentativas'] = 0;
    }

    $limitedetentativas = 3;
    $senha = "1234"; // senha
    $message = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $senhadousuario = $_POST['senha'];
        $_SESSION['tentativas']++;

        do {
            if ($senhadousuario == $senha) {
                $message = "Senha Correta";
                $_SESSION['tentativas'] = 0; // resetar tentativas em caso de sucesso
                break;
            } else {
                if ($_SESSION['tentativas'] >= $limitedetentativas) {
                    $message = "Você atingiu o limite de tentativas. Por favor, altere sua senha.";
                    break;
                } else {
                    $message = "Senha incorreta. Tente novamente.<br>";
                }
            }
        } while ($_SESSION['tentativas'] < $limitedetentativas);
    }
    ?>
    <p><?php echo $message; ?></p>

</body>
</html>
