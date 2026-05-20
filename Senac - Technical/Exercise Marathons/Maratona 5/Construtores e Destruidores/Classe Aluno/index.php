<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Aluno</title>
</head>
<body>
    <h2><center>Classe Aluno</center></h2>
    <?php 
    /* Crie uma classe chamada Aluno que tenha os seguintes atributos:
    nome(string)
    matricula(inteiro)
    curso(string)
    Implemente um construtor que inicializa os atributos e um destruidor que imprime uma mensagem dizendo "Aluno [nome] removido.". Em seguida, crie um objeto dessa classe e destrua o objeto no final, verificando a mensagem de destruição. */

    class Aluno{
        public $nome;
        private $matricula;
        public $curso;

        public function __construct($nome, $matricula, $curso)
        { 
            $this ->nome = $nome;
            $this ->matricula = $matricula;
            $this ->curso = $curso; 
        }
        public function __destruct ()
        {
            echo "Aluno $this->nome removido.";
        }
    }

    $Aluno1 = new Aluno("Michael", 0001, "O melhor no Futebol");
    unset($Aluno1);


    
    
    
    
    
    
    ?>
    
</body>
</html>