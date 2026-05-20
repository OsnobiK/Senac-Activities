<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas de autentificação de funcionários</title>

<h3>Sistemas de autentificação de funcionários</h3>
<form action="" method="post">
    <label for="usuario">Usuário:</label>
    <input type="text" name="usuario" id="usuario">
    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha">
    <button type="submit">Entrar</button>



<?php 

//Funcionários e senhas,um ultilizando um array associativo
$funcionarios = [
    "João" => "123",
    "Maria" => "456",
    "José" => "789"
];
// Dando permissão para o usuário entrar no sistema
if(isset($_POST['usuario']) && isset($_POST['senha'])){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

//if(array_key_exists($$usuario, $funcionarios) verifica se o usuário existe no array)
// && $funcionarios[$usuario] == $senha verifica se a senha está correta
    if(array_key_exists($usuario, $funcionarios) && $funcionarios[$usuario] == $senha){
        echo "<br>Bem vindo ao sistema, $usuario ✅";
    }else{
        echo "<br>Acesso negado❌";
    }
}








?>
















</head>
<body>
    
</body>
</html>