<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Livro</title>
</head>
<body>
    <h2><center>Classe Livro</center></h2>
    <?php 
    /*  Crie uma classe chamada Livro com os seguintes atributos:
    Titulo (string)
    Autor (string)
    Ano (int)
    1. Crie um método chamado exibirinformações() que imprima o titulo, autor e ano de publicação do livro.
    2. Em seguida, crie três objetos da classe livro com dados diferentes e chame o método exibirinformacoes() para cada objeto. */

    class Livro {
        public $titulo;
        public $autor;
        public $ano;

        public function __construct($titulo, $autor, $ano){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->ano = $ano;
        }
        
        public function
        exibirinformacoes(){
            echo "Titulo: $this->titulo <br>";
            echo "Autor: $this->autor <br>";
            echo "Ano: $this->ano <br>";
            echo "<br>";
        }
        }
        $livro1 = new Livro ("A Sutil Arte de Ligar o Foda-se", "Mark Manson", 2017);
        $livro1 ->exibirinformacoes();
        $livro2 = new Livro ("Five nights at Freddy's: The Silver Eyes", "Scott Cawthon", 2015);
        $livro2 ->exibirinformacoes();
        $livro3 = new Livro ( "Atenção Plena", "Mark Williams", 2011);
        $livro3 ->exibirinformacoes();
    
    ?>
</body>
</html>