<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de preço com frete</title>
    <h3><center>Calculo de preço com frete</center></h3>
    <br>
    <form action="" method="post">
        <label for= "preco">Digite o Preço do produto:</label>
        <input type="number" name= "preco" id="preco">
        <br>
        <label for= "frete">Digite o valor do frete:</label>
        <input type="number" name= "frete" id="frete">

    <?php 
    $preco = $_POST['preco'];
    $frete = $_POST['frete'];
    $total = $preco + $frete;
    echo "<br>O valor total da compra é: $total";
       
    function calcularFrete($preco) {
        $frete = $preco * 0.15;
        return $frete;
    }
    
    function calcularDesconto($total) {
        if ($total > 1000) {
            $total = $total * 0.80;
        }
        return $total;
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $preco = $_POST['preco'];
        $frete = calcularFrete($preco);
        $total = $preco + $frete;
        $totalComDesconto = calcularDesconto($total);
        echo "<br>O valor total da compra é: $totalComDesconto";
    }
   



    ?>  



</head>
<body>
    
</body>
</html>
