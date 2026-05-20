<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número par ou ímpar</title>
</head>
<body>
    <h1> Número par ou ímpar </h1>
    <?php
    $numero = 38;
    

    if ($numero % 2 == 0) {
        echo "O número é par";
    } else {
        echo "O número é ímpar";
    }
    ?>
</body>
</html>