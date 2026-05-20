<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Conta Corrente</title>
</head>
<body>
    <h2><center>Conta Corrente</center></h2>
    <?php
    /* Crie uma classe chamada ContaCorrente com os seguintes atributos:
    numeroConta (string)
    saldo (float)
    Implemente um modificador de acesso para o atributo numeroConta, de forma que ele seja somente leitura (ou seja, apenas pode ser acessado por metodos get.) Oatributo saldo deve ser alterado apenas por metodos dda classe (não deve ser modificado diretamente de fora).
    Em seguida, crie um objeto dessa classe e:
    1. ente acessar diretamente o numeroConta e o saldo.
    2. tente alterar o saldo diretamente.(ISSO DEVE GERAR UM ERRO OU SER IMPOSSIVEL).*/

    class ContaCorrente{
        public $numeroconta;
        private $saldo;

        public function __construct($numeroConta, $saldo)
        {
            $this ->numeroconta = $numeroConta;
            $this ->saldo = $saldo;
        }
        
               
        public function getSaldo()
        {
            return $this ->saldo;
        }
        public function setnumeroconta($numeroconta)
        {
            $this ->numeroconta = $numeroconta;
        }
        public function getnumeroconta()
        {
            return $this ->numeroconta;
        }

    }
        $conta1 = new ContaCorrente(3000 , 4000);//numero da conta
        //$conta1 ->setnumeroconta(10000); //numero da conta alteravel
        echo "Numero da conta: " . $conta1 ->getnumeroconta();
        echo "<br>";
        echo "Saldo: R$ " . $conta1 ->getSaldo();
        echo "<br>";
        //$conta1 ->saldo = 5000;// IMPOSSIVEL ALTERAR POIS O SALDO É PRIVADO.
     
 
        
       


        

        

















    



    
    
    
    
    ?>
</body>
</html>