<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    <h1> Notas </h1>
    <?php 
    $nota = 7;
    switch ($nota){
        case $nota < 4.9 :
            echo "Reprovado";
            break;
            case $nota >= 5 && $nota <= 6.9 :
                echo "Recuperação";
                break;
                case $nota >=7 :
                    echo "Aprovado";
                    break;
                    default:
                    "Você é professor";
    }
 
    ?>
    
</body>
</html>