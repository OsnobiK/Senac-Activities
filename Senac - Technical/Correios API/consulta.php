<?php
 
if(!isset($_GET['cep'])) {
    echo json_encode(['erro' => true, 'mensagem' => 'CEP não informado']);
    exit;
}
 
$cep = preg_replace('/[^0-9]/', '', $_GET['cep']);
 
if(strlen($cep) != 8) {
    echo json_encode(['erro' => true, 'mensagem' => 'CEP inválido']);
    exit;
   
}
 
$url = "https://viacep.com.br/ws/{$cep}/json/";
 
$response = file_get_contents($url);
 
if (!$response) {
    echo json_encode(['erro' => true, 'mensagem' => 'Erro ao acessar ViaCEP']);
    exit;
}
 
echo $response;