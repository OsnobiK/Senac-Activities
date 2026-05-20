<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de Pedidos</title>
</head>
<body>
    <h2>Processamento de Pedidos</h2>
    <form action="" method="post">
        <label for="pedidos">Digite o número de pedidos a serem processados:</label>
        <input type="number" name="pedidos" id="pedidos">
        <input type="submit" value="Enviar">
    </form>

    <?php 
    
    if (isset($_POST['pedidos']) && $_POST['pedidos'] > 0) {
        $pedidos = $_POST['pedidos'];
        $contador = 1;
        do {
            echo "Processando pedido $contador <br>";
            $contador++;
        } while ($contador <= $pedidos);
        echo "Todos os pedidos foram processados";
    } else {
        echo "Não há pedidos a serem processados";
    }
    ?>
</body>
</html>
