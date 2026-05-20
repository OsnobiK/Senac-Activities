<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
</head>
<body>
    <h1> Cinema ✋🏻😯✋🏻 </h1>
    <?php 
    $horas = 23;
    $minutos = 59;

    $horaformatada = str_pad($horas, 2 , "0", STR_PAD_LEFT) . ":" . str_pad($minutos, 2, "0", STR_PAD_LEFT);

    if($horaformatada >=10 && $horaformatada < 12){
        echo "Preço do ingresso: R$10,00(matinal)";
    }
    elseif ($horaformatada >12 && $horaformatada <= 17){
        echo "Preço do ingresso: R$20,00 (diurno)";
    }
    elseif ($horaformatada >17 && $horaformatada <= 22){
        echo "Preço do ingresso: R$30,00(noturno)";
    } 
    else{
        echo "Preço do ingresso:R$40,00 (última sessão)";
    }
    
    ?>
</body>
</html>