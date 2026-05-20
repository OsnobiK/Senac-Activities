<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop</title>
</head>
<body>

<h2 style="color: blue;"> Informações Gato </h2>

<?php 


/*Crie um programa que tenha um array associativo com dados de um gato que 
chegou no petshop, como chave e seu valor. Utilize o foreach para imprimir os 
nomes dos dados do gato*/



$gato = ["Nome" => "Nami", "Peso" => "2kg", "Idade" => "2 anos", "Chave" => 234821, "Valor" => 360];

foreach($gato as $informação => $resultado){
     if($informação == "Valor") {
        echo $informação . " = R$ <b>" . number_format($gato["Valor"],2,'.','.') . "</b>";
    } else if (
    $informação != "Valor"){

    echo $informação . " = <b>" . $resultado . "</b><br>";}
}


?>


</body>
</html>