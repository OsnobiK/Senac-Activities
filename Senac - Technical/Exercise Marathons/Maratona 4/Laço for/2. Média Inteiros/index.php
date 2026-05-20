<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media de Inteiros</title>
</head>
<body>
    <h2>Media de Inteiros</h2>
<?php 
    /*Crie um programa que receba 10 números inteiros e calcule a média desses números. Utilize o laço for para ler os números e calcular a média */

    for ($i = 0; $i <= 10; $i++) {
        $num = [10,20,30,40,50,60,70,80,90,100];
        $int = count($num);//Conta quantos inteiros tem.
        $soma = array_sum($num);//Soma os inteiros.
        $media = $soma / $int;//Calcula a média.
    } 
    echo "o valor da media é : $media <br>";
        
    


?>  


    
</body>
</html>