<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de imposto com desconto</title>
</head>
<body>
    <h2>Calculo de imposto com desconto</h2>
    <form action="" method="post">
        <label for="valorCompra">Digite o valor da compra:</label>
        <input type="number" name="valorCompra" id="valorCompra">
        <input type="submit" value="Enviar">
    </form>

<?php 
function calcularValorFinal($valorCompra) {
    $desconto = 0;
    $imposto = $valorCompra * 0.08;

    if ($valorCompra > 500) {
        $desconto = $valorCompra * 0.10;
    }

    $valorFinal = $valorCompra + $imposto - $desconto;
    return $valorFinal;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['valorCompra'])) {
    $valorCompra = floatval($_POST['valorCompra']);
    $valorFinal = calcularValorFinal($valorCompra);

    echo "Valor da compra: R$ " . number_format($valorCompra, 2, ',', '.') . "<br>";
    echo "Valor do imposto: R$ " . number_format($valorCompra * 0.08, 2, ',', '.') . "<br>";
    echo "Valor do desconto: R$ " . number_format($valorCompra > 500 ? $valorCompra * 0.10 : 0, 2, ',', '.') . "<br>";
    echo "Valor final da compra: R$ " . number_format($valorFinal, 2, ',', '.');
}
?>

</body>
</html>



    

</body>
</html>
