<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Máquina de Refrigerantes</title>
 
<style>
 
div {
width:300px;
margin:auto;
border-radius: 20px;
padding: 25px;
background-color: rgb(60, 61, 64);
color: rgb(255, 255, 255);
border: 2px solid rgb(95, 99, 105);
font-family: Arial, Helvetica, sans-serif;
font-size: medium;
}
 
input[type="text"]{
  border-radius: 10px;
  height: 20px;
  padding: 5px;
  background-color: rgb(60, 61, 64);
  border: 1px solid rgb(255, 255, 255);
  color: rgb(255, 255, 255);
}
 
input[type="submit"]{
  border-radius: 10px;
  height: 35px;
  padding: 5px;
  background-color: rgb(167, 199, 250);
  color: rgb(64, 46, 112);
}
body {
  background-color: rgb(32, 34, 36);
}

pre {
  font-family: Arial, Helvetica, sans-serif;
}
 
 
</style>
 
</head>
 
<br>
 
<!-- Exercício com Máquina de Refrigerante utilizando switch
Enunciado:
Crie um programa que simula o funcionamento de uma máquina de refrigerante.
A máquina oferece as seguintes opções:
1. Coca-Cola
2. Pepsi
3. Sprite
4. Fanta
Quando o usuário escolhe uma das opções, a máquina deve retornar uma
mensagem específica sobre a escolha.
-->
 
<div>
 
<body>
 
<center><img src="https://cdn.pixabay.com/photo/2023/05/03/22/49/soft-drink-7968720_1280.png" alt="Máquina de refrigerante" width="270" height="400"></center>
 
<pre style="font-family: Arial, Helvetica, sans-serif;">
<b>Refrigerantes disponíveis:</b>
 
1. Coca-Cola                <span><pre>R$ 6,00</pre></span>
2. Pepsi                    <span><pre>R$ 5,50</pre></span>
3. Sprite                   <span><pre>R$ 5,10</pre></span>
4. Fanta                    <span><pre>R$ 5,25</pre></span>
  
Escolha um refrigerante:
</pre>
 
 
<form action="index.php" method="GET">
<input type="text" name="refrigerante" placeholder="Digite um número">
<input type="submit" value="Enviar">
</form>
 
<br>
 
<?php
 
 
if(isset($_GET["refrigerante"])){
switch($_GET["refrigerante"]){
 
case 1 :
echo "Aproveite sua <b style='color:red'>Coca-Cola</b>!🐻‍❄️";
break;
case 2 :
echo "Aproveite sua <b style='color:blue'>Pepsi</b>!🧊";
break;
case 3 :
echo "Aproveite sua <b style='color:green'>Sprite</b>!🍋‍🟩";
break;
case 4 :
echo "Aproveite sua <b style='color:orange'>Fanta</b>!🍊";
break;
default :
echo "Você deve escolher um número entre <b>1</> e <b>4</b>!";
break;
}
}
 
 
 
?>
 
</div>
 
</body>
</html>