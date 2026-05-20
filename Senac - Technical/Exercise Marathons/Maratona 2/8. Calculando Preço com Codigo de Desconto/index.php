<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando o Preço com base em um codigo de desconto</title>
</head>
<body>
<h2>Calculando o Preço com base em um codigo de desconto</h2>

<!-- Cria um campo para poder ser preenchido e armazena os dados-->
<form method="post">
    <label for="produto">Selecione o produto:</label>
    <input type="text" id="produto" name="produto" required><br><br>
    <label for="valor">Digite o valor em R$:</label>
    <input type="number" id="valor" name="valor" step= "0.1" required><br><br>
    <label for="codigo">Digite o código de desconto:</label>
    <input type="text" id="codigo" name="codigo" required><br><br>
    
<!-- Cria um botõ para poder enviar a resposta-->    
    <input type="submit" id="verificar" name="verificar" value="verificar">

</form> (isset($_POST['verificar'])) {
    $produto = $_POST["produto"];
    $valor = $_POST["valor"];
    $codigo = $_POST["codigo"];
    $desconto = 0;
    $valorFinal = 0;
    switch ($codigo) {
        case "DSC10" :
            echo "Código de desconto aplicado: 10% de desconto";
            $desconto = 0.10;
            break;
            case "DSC20" :
                echo "Código de desconto aplicado: 20% de desconto";
                $desconto = 0.20;
                break;
                case "DSC30" :
                echo "Código de desconto aplicado: 30% de desconto";
                $desconto = 0.30;
                break;
                default:
                    echo "Código de desconto inválido";
                    $desconto = 0;
                    break;
    }








}

<?php ?>
    
</body>
</html>