<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto</title>

</head>
<h2>Desconto de 15%</h2>

<body>

<?php 

/*Crie uma função que receba o valor de uma compra e calcule o desconto de 15%. 
A função deve retornar o valor com o desconto aplicado.*/

Function desconto($n){
    return $n - ($n * 0.15);}

echo "O valor da sua compra após desconto 15% é: R$" . number_format(desconto(550), 2 , ',', '.');


/*Crie um programa que receba 10 números inteiros e calcule a média desses números. Utilize o laço for para ler os números e calcular a média */

for ($a=0; $a > -1 && $a <= 10; $a++){
echo $a;
echo "<br>";
}



$a = range(1,10);
$b = array_sum($a);
$ab = $b / 10;

echo "A média dos números números acima é: " . $ab;




?>

</body>

</html>