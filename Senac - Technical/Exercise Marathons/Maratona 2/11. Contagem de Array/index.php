<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem do array</title>
</head>
<body>
    <h1> Contagem do array </h1>
    <?php  
    
    $tamanhoArray = 10;

    $arrayAleatoria = [];

    for ($i = 0; $i < $tamanhoArray; $i++) { $arrayAleatoria[] = rand (1, 100);}

    print_r($arrayAleatoria);
    $contadorPares = 0;

    foreach ($arrayAleatoria as $numero){ 
        if ($numero % 2 == 0) {
            $contadorPares++;
        }
    }

    echo "<br>";

    echo "A quantidade de números pares são: " . $contadorPares;

    ?>
    
</body>
</html>
