<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voto obrigatório ou não</title>
</head>
<body>
    <h1> Voto obrigatório ou não </h1>
    <?php 
    $idade = 37;
    if ($idade <= 17) {
        echo "Você não é obrigado a votar";
    } 
    else if ($idade >= 18 && $idade <= 69){
        echo "Você é obrigado a votar";
    } 
    
    ?>
</body>
</html>