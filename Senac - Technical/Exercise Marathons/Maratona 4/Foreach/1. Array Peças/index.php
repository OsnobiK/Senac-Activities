<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peças de Carro</title>
</head>
<body>
    
<h2 style="color:brown">Peças de Carro</h2>

<?php 

/*Crie um programa que tenha um array de nomes de 10 peças de carro e imprima 
todos os nomes em uma lista.*/


$carro = ["Roda", "Volante","Retrovisor", "Painel", "Banco", "Pneu", "Porta", "Câmbio", "Velocímetro", "Para-choque"];

foreach ($carro as $peças){
echo $peças . "<br>";
}



?>

</body>
</html>