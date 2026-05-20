<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Cidades</title>
 
</head>

<style>

img {

    border-radius: 40px;
}

</style>

        <body bgcolor="f9e3cf"> <!-- Adicionando uma cor no fundo do site-->
 
        <h2><center><b>Encontre a sua Cidade!</b></center></h2>
       
    <form method="post"> <!-- Metodo "Post" é usado para enviar dados para um servidor, como para criar um cadastro ou enviar um formulário. -->
 
        <center><input type="text" name="cidade" placeholder="Digite a cidade"></center> <!-- Cria e Centraliza um campo de texto. -->
 
         <center><input type="submit" value="Enviar"></center> <!-- Cria e centraliza um botão para enviar o valor atribuido ao campo de texto. -->
 
    </form>

 
    <?php
    /* Exercício com array:
    Criar um array com os nomes de cinco cidades. Em seguida, verificar se uma
    cidade específica está presente no array e exibir uma mensagem indicando se ela
    foi encontrada ou não.*/
   
 
        // Array com as cidades, ($ct = city )
        $ct = ['São Paulo', 'Rio de Janeiro', 'Belo Horizonte', 'Porto Alegre', 'Curitiba'];
 
    // Define um valor True or False para o $_POST dentro do campo "cidade". [Em outras palavras, a função "isset" define se a função "$_POST" dentro da variavel $cidade esta "null" (false) ou com algum valor(true).]
    if (isset($_POST["cidade"])) {
 
        // Define uma variavel para a função $_POST dentro do campo "cidade".
        $cidade = $_POST['cidade'];
 
 
 
                // ($ce = cidade encontrada) Define uma variavel para a função $_POST dentro do campo "cidade".
                $ce = $_POST['cidade'];
 
 
                // Busca dentro da Array de cidades se o valor atribuido na variante $ce esta presente no Array $ct
                 if (in_array($ce, $ct)) {
 
        // Se sim, envia uma mensagem de acerto!
        echo "<br><center>Cidade Encontrada✔️</center> <br>";
       
        // Do caso contrario, exibe uma mensagem de erro!
    }
    else{ echo "<br><center>Cidade não encontrada❌</center>"; }
}
 
 
// A função "!empty()" define se a variavel $cidade é vazia para retornar true, do caso contrario retorna false, caso tenha algo atribuido dentro da variavel.
if(!empty($cidade)){                                                            
 
//O uso do "switch" é para a troca de imagens, caso o usuario digite algumas das cidades presentes no array, o site carregara a imagem referente, ao nome da cidade, do caso contrario, a imagem não sera trocada.
 switch ($cidade) {
 
 
        case "São Paulo":
            echo "<center><img src='https://jpimg.com.br/uploads/2024/01/aniversario-de-sao-paulo-10-curiosidades-sobre-a-cidade.jpg' width='900' height='500'  </center>";
                break;
 
       
        case "Rio de Janeiro":
            echo "<center><img src='https://images.unsplash.com/photo-1483729558449-99ef09a8c325?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' width='900' </center>";
                break;
 
        case "Belo Horizonte":
             echo "<center><img src='https://upload.wikimedia.org/wikipedia/commons/0/0f/Belo_Horizonte_%282%29.jpg' width '900' height='600'</center>";
                break;
 
 
        case "Porto Alegre":
            echo "<center><img src='https://blog.br.tkelevator.com/wp-content/uploads/2024/03/AdobeStock_603396190-1140x725.jpg' height='500' </center>";
                break;
 
 
        case "Curitiba":
            echo "<center><img src='https://grupoparanacomunicacao.com.br/wp-content/uploads/2022/06/curitiba-empreender.jpg' height='500' </center>";
                break;
    }
}
 
?>
   
</body>
</html>
 