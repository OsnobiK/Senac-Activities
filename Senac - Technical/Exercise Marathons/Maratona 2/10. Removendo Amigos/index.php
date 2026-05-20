<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover o segundo amigo</title>
</head>
<body>
    <h1> Remover segundo amigo </h1>
    <?php 
    $amigos = ["Satoru", "Calebi","Geovanna", "Bryan", "Pedro"];

    echo "<br>";

    unset($amigos[2]);
    print_r($amigos);

    ?>
    
</body>
</html>