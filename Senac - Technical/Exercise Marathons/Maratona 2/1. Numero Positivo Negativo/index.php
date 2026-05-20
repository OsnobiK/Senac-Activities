<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Else</title>
</head>
<body>
    <h1> Número positivo ou negativo </h1>
    <?php 
    $numero = 37;
    if ($numero < 0){
        echo "O número é negativo.";
    }
    if ($numero > 0){
        echo "O número é positivo!";
    }
    if ($numero == 0){
        echo "O número é igual é zero.";
    }
    ?>
    
</body>
</html>