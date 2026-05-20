<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>É Primo?</h2>
<?php
/*Crie uma função que receba um número e determine se ele é primo ou não.*/
class ÉPrimo
{       
function check($num)
{
    for ($i = 2; $i < $num; $i++)
    {
        if ($num % $i == 0) 
        {
            echo "O número " . $num . " não é primo.";
            return; 
        }               
    }
    echo "O número " . $num . " é primo.";           
}       
}
$x = new ÉPRimo();
$x->check(1129);
?>   
</body>
</html>