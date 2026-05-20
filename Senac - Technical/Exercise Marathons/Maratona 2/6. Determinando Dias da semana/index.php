<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Determinando dias da semana</title>
</head>
<body>
<h2>Determinando dias da semana</h2>

<!-- Cria um campo para poder ser preenchido e armazena os dados-->
<form method="post">
    <label for="dia">Selecione o dia</label>
    <input type="number" id="dia" name="dia" step="1" required><br><br>

    
<!-- Cria um botõ para poder enviar a resposta-->    
    <input type="submit" id="verificar" name="verificar" value="verificar">
<?php
    if(isset($_POST['verificar'])){
        $dia = $_POST['dia'];
        switch($dia){
            case 1:
                echo "Domingo";
                break;
            case 2:
                echo "Segunda-feira";
                break;
            case 3:
                echo "Terça-feira";
                break;
            case 4:
                echo "Quarta-feira";
                break;
            case 5:
                echo "Quinta-feira";
                break;
            case 6:
                echo "Sexta-feira";
                break;
            case 7:
                echo "Sábado";
                break;
            default:
                echo "Dia inválido";
        }
    }














?>
    
</body>
</html>