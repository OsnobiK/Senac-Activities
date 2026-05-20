<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação de Nota</title>
</head>
<body>
    <h2>Classificação de Nota</h2>

    <!-- Cria um campo para poder ser preenchido e armazena os dados-->
    <form method="post">
        <label for="nota">Nota do Aluno</label>
        <input type="number" id="nota" name="nota" step="0.1" required><br><br>
        
    <!-- Cria um botõ para poder enviar a resposta-->    
        <input type="submit" id="verificar" name="verificar" value="verificar">
    <?php
    if (isset($_POST["verificar"])) {
        $nota = floatval($_POST["nota"]);
    }
    elseif ($nota <= 4.9 && $nota >= 0){
        echo "O aluno foi reprovado☠️.";
    }
    elseif ($nota <= 6.9 && $nota >= 5) {
        echo "O aluno está de recuperação😭.";
    }
    elseif ($nota <= 8.9 && $nota >= 7){
        echo "O aluno está Aprovado!🍷🗿.";
    }
    elseif ($nota <=10 && $nota >= 9){
        echo "O aluno foi aprovado com distinção!!✋😳";
    }     
        ?>


</body>
</html>